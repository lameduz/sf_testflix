<?php

namespace MoviesBundle\Command;

use MoviesBundle\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Person;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Goutte\Client;


class AppMyAllocineCrawlerCommand extends ContainerAwareCommand
{
    public $uri_to_crawl = "http://www.allocine.fr/films/decennie-2010/";
    public $allocine;
    public $crawler;
    public $client;
    public $movie;
    public $productionYear;
    public $page = 1;
    public $year;
    public $savedPages;
    public $savedMovies;

    protected function configure()
    {
        $this
            ->setName('app:my-allocine-crawler')
            ->setDescription('...')
            ->addArgument('year', InputArgument::REQUIRED, 'Année de production')
            ->addArgument('page', InputArgument::OPTIONAL, 'Page à scraper')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->productionYear = $input->getArgument('year');
        $this->allocine = new \Allocine('100043982026', '29d185d98c984a359e6e6f26a0474269');

        $this->setYear($this->productionYear);
        $this->setPage($input->getArgument('page'));
        $this->setUri();
        $this->crawler();
    }

    protected function setPage($page)
    {
        $this->savedPages = $page;
        $this->page = $page;
    }

    protected function setYear($year)
    {
        $this->year = $year;
    }

    protected function setUri()
    {
        $this->uri_to_crawl = $this->uri_to_crawl . 'annee-' . $this->year;
    }

    protected function getCurrentCrawledUri()
    {
        return $this->uri_to_crawl;
    }

    protected function setCrawledUri()
    {
        $this->uri_to_crawl = $this->uri_to_crawl . 'annee-' . $this->year;
    }

    protected function crawler()
    {
        $this->client = new Client();

        $this->client->setHeader('user-agent', 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/534.3 (KHTML, like Gecko) Chrome/6.0.472.63 Safari/534.3');
        $this->crawler = $this->client->request('GET', $this->uri_to_crawl . '/?page=' . $this->page);
        $lastPage = $this->crawler->filter('.pagination-item-holder')->children()->last()->text();
        #$this->savedPages = 0;

        while ($this->savedPages != $lastPage) {
            $links = $this->crawler->filter('h2 > .meta-title-link')->extract('_text');
            $this->navigator($links);
        }

    }

    protected function navigator($links)
    {
        foreach ($links as $info) {
            $result = $this->searchMovie($info);
            foreach ($result->feed->movie as $movie) {
                if (!property_exists($movie, 'productionYear')) continue;
                if ($movie->productionYear == $this->productionYear) {
                    $result = $movie;
                    break;
                }
            }
            if (!property_exists($result, 'code')) continue;
            $movieObj = $this->getMovieInfos($result->code);
            if ($this->missingPropertiesCount($movieObj) < 3) {
                $this->insertMovieInfos($movieObj);
            }
            if ($this->savedMovies == count($links)) {
                $this->savedPages++;
                $this->savedMovies = 0;
                $this->page++;

                $this->crawler = $this->client->request('GET', $this->uri_to_crawl . '/?page=' . $this->page);
                dump($this->crawler->getUri());
                dump('Chargement de la page : ' . $this->savedPages);
            }
            sleep(2);
        }
    }

    protected function missingPropertiesCount($obj)
    {
        $array = ['productionYear', 'synopsis', 'title', 'castingShort', 'nationality', 'runtime', 'release'];
        $missingProperties = 0;
        foreach ($array as $val) {
            if (!property_exists($obj->movie, $val))
                $missingProperties++;
        }
        return $missingProperties;
    }

    protected function searchMovie($title)
    {
        $result = $this->allocine->search($title);
        return json_decode($result);
    }

    protected function getMovieInfos($code)
    {
        $infos = $this->allocine->get($code);
        return json_decode($infos);
    }

    protected function insertMovieInfos($data)
    {
        if (!property_exists($data->movie, 'media') && !property_exists($data->movie, 'poster')) {
            $thumb = null;
        } elseif (!property_exists($data->movie, 'poster')) {
            $thumb = $data->movie->media[0]->thumbnail->href;
        } else {
            $thumb = $data->movie->poster->href;
        }
        $title = $data->movie->title;
        $casting = (!property_exists($data->movie, 'castingShort')) ? 'Inconnu' : $data->movie->castingShort;
        $actors = (!property_exists($casting, 'actors')) ? ['Inconnu'] : explode(',', $casting->actors);
        $directors = (!property_exists($casting, 'directors')) ? ['Inconnu'] : explode(',', $casting->directors);
        $synopsis = (!property_exists($data->movie, 'synopsis')) ? 'Inconnu' : $data->movie->synopsis;
        $length = (!property_exists($data->movie, 'runtime')) ? 'Inconnu' : $this->secondsToTime($data->movie->runtime);
        $releaseDate = (!property_exists($data->movie, 'release')) ? 'Inconnue' : $data->movie->release->releaseDate;
        $nationalityObj = (!property_exists($data->movie, 'nationality')) ? ['Inconnue'] : $data->movie->nationality;
        $genresObj = (!property_exists($data->movie, 'genre')) ? 'Inconnu' : $data->movie->genre;

        $genres = [];
        $nationalities = [];

        $em = $this->getContainer()->get('doctrine');
        $em = $em->getManager();

        foreach ($genresObj as $genre) {
            $genres[] = $genre->{'$'};
        }

        foreach ($nationalityObj as $nat) {
            $nationalities[] = $nat;
        }
        $this->movie = new Movie();
        $this->movie->setTitle($title);
        $this->movie->setSynopsis($synopsis);
        $this->movie->setLength($length);
        $this->movie->setNationality($nationalities);
        $this->movie->setDateOut($releaseDate);
        $genres = $em->getRepository('MoviesBundle:Genre')->findBy(['name' => $genres]);

        foreach ($genres as $genre) {
            $this->movie->addGenre($genre);
        }

        foreach ($actors as $actor) {
            $person = new \MoviesBundle\Entity\Person();
            $person->setJob('actor');
            $person->setName($actor);
            $this->movie->addPerson($person);

        }

        foreach ($directors as $director) {
            $person = new \MoviesBundle\Entity\Person();
            $person->setJob('director');
            $person->setName($director);
            $this->movie->addPerson($person);
        }

        if ($thumb != null) {
            $this->movie->setImage('web/assets/imgs/movies/' . str_replace([' ', '/', ':', '\\'], '_', $this->movie->getTitle()));
            copy($thumb, 'web/assets/imgs/movies/' . str_replace([' ', '/', ':', '\\'], '_', $this->movie->getTitle()) . '.jpg');
        }
        $em->persist($this->movie);
        $em->flush();
        $this->savedMovies++;
        dump($this->movie->getTitle() . ' a été ajouté en base de données ');
    }

    protected function secondsToTime($seconds)
    {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        return $dtF->diff($dtT)->format('%hh%imin');
    }

    protected function getFormatedField($field)
    {
        $fieldsToFormat = $this->crawler->filter('.meta-body-item:contains("' . $field . '")')->extract('_text');
        $tmp = trim(preg_replace('/\s\s+/', ' ', $fieldsToFormat[0]));
        if ($field == 'Genre') {
            $tmp = str_replace(',', '', $tmp);
            $tmp = explode(' ', $tmp);
            unset($tmp[0]);

            //Remove string 'genre' from array
            if ($key = array_search('fiction', $tmp)) {
                $tmp[$key - 1] = 'Science fiction';
                unset($tmp[$key]);
            }
            if ($key = array_search('dramatique', $tmp)) {
                $tmp[$key - 1] = 'Comédie dramatique';
                unset($tmp[$key]);
            }
        }
        if ($field == 'De' || $field == 'Avec') {
            $tmp = str_replace('De', '', $tmp);
            $tmp = str_replace('plus', '', $tmp);
            $tmp = str_replace('Avec', '', $tmp);
            $tmp = trim($tmp);
            $tmp = explode(',', $tmp);
        }
        if ($field == 'Nationalité') {

            $tmp = str_replace('Nationalité', '', $tmp);
            $tmp = explode(' ', $tmp);
            unset($tmp[0]);
            $tmp = implode('', $tmp);
        }
        $fields = $tmp;
        dump($fields);
        return $fields;
    }

}
