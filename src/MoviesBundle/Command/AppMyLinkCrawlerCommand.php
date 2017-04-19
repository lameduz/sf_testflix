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
    protected $query;
    protected $year;

    protected function configure()
    {
        $this
            ->setName('app:my-link-crawler')
            ->setDescription('...')
            ->addArgument('query', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $query = $input->getArgument('query');
        #$year = $input->getArgument('year');

        #$this->setYear($year);
        $output->writeln('Command result : ');
        $this->crawler();
    }

    protected function crawler()
    {
        $this->client = new Client();
        $this->crawler = $this->client->request('get', 'https://streamay.bz/films/annee/2017');
        $attributes = $this->crawler->filter('.infos > .title')->extract(['href', '_text']);

        $em = $this->getContainer()->get('doctrine');
        $em = $em->getManager();
        $rep = $em->getRepository('MoviesBundle:Movie');

        $matches = 0;
        foreach ($attributes as $attr) {
            if ($movie = $rep->findOneByTitle($attr[1])) {
                $streamayMovieId = $this->idExtractor($attr[0]);
                $openload = 'https://streamay.bz/streamer/' . $streamayMovieId . '/openload';
                $this->crawler = $this->client->request('get', $openload);
                $streamayMovieHost = json_decode($this->client->getInternalResponse()->getContent());
                if ($streamayMovieHost) {
                    dump($movie->getTitle());
                    $host = new Host();
                    $host->setName($streamayMovieHost->streamer);
                    $host->setUri($streamayMovieHost->code);
                    $movie->addHost($host);
                    $em->flush();
                }
                $matches++;
            }
        }
        dump($matches . " films matchent avec la DB");
    }

    protected function idExtractor($str)
    {
        $tmp = explode('/', $str);
        $tmp = explode('-', $tmp[3]);
        $id = $tmp[0];
        return $id;
    }

    protected function setYear($year)
    {
        $this->year = $year;
    }
}
