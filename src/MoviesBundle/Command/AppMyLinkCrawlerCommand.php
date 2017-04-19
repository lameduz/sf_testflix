<?php

namespace MoviesBundle\Command;

use MoviesBundle\Entity\Host;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Goutte\Client;
use MoviesBundle\Entity\Movie;

class AppMyLinkCrawlerCommand extends ContainerAwareCommand
{
    protected $client;
    protected $crawler;
    protected $page;
    protected $savedPages = 0;
    protected $pagesCount;
    protected $query;
    protected $year;

    protected function configure()
    {
        $this
            ->setName('app:my-link-crawler')
            ->setDescription('...')
            ->addArgument('year', InputArgument::OPTIONAL, 'Films par années')
            ->addArgument('page', InputArgument::OPTIONAL, 'Films par page')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setYear($input->getArgument('year'));
        $this->setPage($input->getArgument('page'));

        if ($this->page && $this->year) {
            $this->crawler($this->page, $this->year);
        } else {
            $output->writeln('Paramètres manquants!');
        }
    }
    public function crawler($page, $year)
    {
        $this->client = new Client();
        $this->crawler = $this->client->request('get', 'https://streamay.bz/films/annee/' . $year . '/?page=' . $page);
        // Récupère attributs href et text grâce aux liens des films sur la page
        $attributes = $this->crawler->filter('.infos > .title')->extract(['href', '_text']);
        // Récupère le nombre de pages afin de mettre en place la pagination
        $pages_count = $this->crawler->filter('.pagination > li')->last()->previousAll()->text();
        // On boucle tant que le nombre de pages analysée n'est pas égale au nombre de pages du site cible.
        while ($this->savedPages != $pages_count) {
            $this->navigator($attributes);
        }
    }

    protected function navigator($attributes)
    {
        $countMoviesOnPage = $this->crawler->filter('.movies_list_vertical')->children()->count();
        $analyzed_items = 0;
        // Pour chaque film sur la page, j'interroge la DB pour savoir si il est déjà présent
        // Si c'est le cas je récupère l'host du film via l'attribut HREF récupéré plus tôt
        // puis je l'insère en DB
        $em = $this->getContainer()->get('doctrine');
        $em = $em->getManager();
        $rep = $em->getRepository('MoviesBundle:Movie');

        foreach ($attributes as $attr) {
            if ($movie = $rep->findOneByTitle($attr[1])) {
                // Je récupère l'ID du film sur le lien afin de faire une nouvelle requête et récupéré
                // Les informations relatives à l'host dans la réponse.
                $streamayMovieId = $this->idExtractor($attr[0]);
                $openload = 'https://streamay.bz/streamer/' . $streamayMovieId . '/openload';
                $this->crawler = $this->client->request('get', $openload);
                $streamayMovieHost = json_decode($this->client->getInternalResponse()->getContent());
                // Check si un host est bien présent sur la fiche du film
                // Si c'est le cas on l'ajoute en base de données.
                if ($streamayMovieHost) {
                    $host = new Host();
                    $host->setName($streamayMovieHost->streamer);
                    $host->setUri($streamayMovieHost->code);
                    $movie->addHost($host);
                    $em->flush();
                }
            }
            $analyzed_items++;
        }
        if ($analyzed_items == $countMoviesOnPage) {
            $this->savedPages++;
            $this->crawler = $this->client->request('get', 'https://streamay.bz/films/annee/2017/?page=' . $this->page += 1);
            dump('Page ' . ($this->page - 1) . ' : analysée et mise à jour.');
            dump('Chargement de la page : ' . $this->page . '...');
            $analyzed_items = 0;
        }
    }

    protected function idExtractor($str)
    {
        $tmp = explode('/', $str);
        $tmp = explode('-', $tmp[3]);
        $id = $tmp[0];
        return $id;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function setPage($page)
    {
        $this->page = $page;
    }
}
