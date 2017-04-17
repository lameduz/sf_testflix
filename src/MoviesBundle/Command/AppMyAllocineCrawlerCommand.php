<?php

namespace MoviesBundle\Command;

use MoviesBundle\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Serialization\Person;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Goutte\Client;


class AppMyAllocineCrawlerCommand extends ContainerAwareCommand
{
    public $uri_to_crawl = "http://www.allocine.fr/films/decennie-2010/";
    public $crawler;
    public $client;
    public $movie;
    public $page = 1;
    public $year;
    public $productionYear;
    public $savedPages;
    public $savedMovies;

    #public $allocine;

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
        #$this->allocine = new \Allocine('100043982026', '29d185d98c984a359e6e6f26a0474269');
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
    protected function crawler()
    {
        $this->client = new Client();
        $this->client->setHeader('user-agent', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36');
        $this->crawler = $this->client->request('GET', $this->uri_to_crawl . '/?page=' . $this->page);
        $lastPage = $this->crawler->filter('.pagination-item-holder')->children()->last()->text();
        while ($this->savedPages != $lastPage) {
            $links = $this->crawler->filter('h2 > .meta-title-link')->extract('_text');
            $this->navigator($links);
        }
    }

    /*protected function missingPropertiesCount($obj)
    {
        $array = ['productionYear', 'synopsis', 'title', 'castingShort', 'nationality', 'runtime', 'release'];
        $missingProperties = 0;
        foreach ($array as $val) {
            if (!property_exists($obj->movie, $val))
                $missingProperties++;
        }
        return $missingProperties;
    }*/

    /*protected function searchMovie($title)
    {
        $result = $this->allocine->search($title);
        return json_decode($result);
    }

    protected function getMovieInfos($code)
    {
        $infos = $this->allocine->get($code);
        return json_decode($infos);
    }*/

    protected function navigator($links)
    {
        $em = $this->getContainer()->get('doctrine');
        $em = $em->getManager();

        foreach ($links as $title) {
            if (preg_match("/\bUntitled\b/i", $title))
                continue;

            $link = $this->crawler->selectLink($title)->link();
            $this->crawler = $this->client->click($link);
            $data = $this->getFormatedMovie();

            $this->movie = new Movie();
            $this->movie->setTitle($title);
            $this->movie->setNationality($data['nationalities']);
            $this->movie->setLength($data['length']);
            $this->movie->setSynopsis($data['synopsis']);
            $this->movie->setReleaseDate($data['release_date']);
            $this->movie->setAllocineUri($this->crawler->getUri());

            $genres = $em->getRepository('MoviesBundle:Genre')->findBy(['name' => $data['genres']]);
            foreach ($genres as $genre) {
                $this->movie->addGenre($genre);
            }
            foreach ($data['actors'] as $actor) {
                $person = new \MoviesBundle\Entity\Person();
                $person->setJob('actor');
                $person->setName($actor);
                $this->movie->addPerson($person);
            }
            foreach ($data['directors'] as $director) {
                $person = new \MoviesBundle\Entity\Person();
                $person->setJob('director');
                $person->setName($director);
                $this->movie->addPerson($person);
            }

            if (null !== $data['poster'] && !preg_match("/\bemptymedia\b/i", $data['poster'])) {
                try {
                    copy($data['poster'], 'web/assets/imgs/movies/' . str_replace([' ', '/', ':', '\\'], '_', $this->movie->getTitle()) . '.jpg');
                    $this->movie->setImage('web/assets/imgs/movies/' . str_replace([' ', '/', ':', '\\'], '_', $this->movie->getTitle()) . '.jpg');
                } catch (\Exception $e) {
                    $this->movie->setImage('Inconnu');
                }
            }
            $em->persist($this->movie);
            $em->flush();
            $this->savedMovies++;
            $this->crawler = $this->client->back();

            dump($this->movie->getTitle() . ' a été ajouté en base de données ');

            if ($this->savedMovies == count($links)) {
                dump($this->savedMovies);
                $this->savedPages++;
                $this->savedMovies = 0;
                $this->page++;
                $this->crawler = $this->client->request('GET', $this->uri_to_crawl . '/?page=' . $this->page);
                dump($this->crawler->getUri());
                dump('Chargement de la page : ' . $this->savedPages);
            }
        }
    }
    protected function secondsToTime($seconds)
    {
        $dtF = new \DateTime('@0');
        $dtT = new \DateTime("@$seconds");
        return $dtF->diff($dtT)->format('%hh%imin');
    }

    protected function getFormatedMovie()
    {
        $mArray = [];
        $poster = $this->crawler->filter('figure > .thumbnail-container > .thumbnail-img')->attr('src');
        $mArray['poster'] = (!isset($poster)) ? null : $poster;
        $mArray['synopsis'] = $this->extractSynopsis();
        $mArray['release_date'] = $this->extractDate();
        $mArray['length'] = ($mArray['release_date'] == 'Inconnu') ? '0h00min' : $this->extractLength();
        $mArray['actors'] = $this->extractActors();
        $mArray['directors'] = $this->extractDirectors();
        $mArray['nationalities'] = $this->extractNationality();
        $mArray['genres'] = $this->extractGenres();
        return $mArray;
    }

    protected function extractGenres()
    {
        if ($this->crawler->filter('.meta-body-item:contains("Genre")')->count() == 0) {
            $genres = 'Inconnu';
        } else {
            $genres = $this->crawler->filter('.meta-body-item:contains("Genre")')->text();
            $genres = trim(preg_replace('/\s\s+/', ' ', $genres));
            $genres = str_replace(',', '', $genres);
            $genres = explode(' ', $genres);
            unset($genres[0]);
            //Remove string 'genre' from array
            if ($key = array_search('fiction', $genres)) {
                $genres[$key - 1] = 'Science fiction';
                unset($genres[$key]);
            }
            if ($key = array_search('dramatique', $genres)) {
                $tmp[$key - 1] = 'Comédie dramatique';
                unset($tmp[$key]);
            }
            if ($key = array_search('musicale', $genres)) {
                $genres[$key - 1] = 'Comédie musicale';
                unset($genres[$key]);
            }
        }
        return $genres;
    }

    protected function extractActors()
    {
        if ($this->crawler->filter('.meta-body-item:contains("Avec")')->count() == 0) {
            $actors = 'Inconnu';
        } else {
            $actors = $this->crawler->filter('.meta-body-item:contains("Avec")')->text();
            $actors = trim(preg_replace('/\s\s+/', ' ', $actors));
            $actors = str_replace('plus', '', $actors);
            $actors = str_replace('Avec', '', $actors);
            $actors = trim($actors);
            $actors = explode(',', $actors);
        }
        return $actors;
    }

    protected function extractDirectors()
    {
        if ($this->crawler->filter('.meta-body-item:contains("De")')->count() == 0) {
            $directors = 'Inconnu';
        } else {
            $directors = $this->crawler->filter('.meta-body-item:contains("De")')->text();
            $directors = trim(preg_replace('/\s\s+/', ' ', $directors));
            $directors = str_replace('plus', '', $directors);
            $directors = str_replace('Avec', '', $directors);
            $directors = trim($directors);
            $directors = explode(',', $directors);
            $directors = explode(' ', $directors[0], 2);
            unset($directors[0]);
        }
        return $directors;
    }

    protected function extractDate()
    {
        if ($this->crawler->filter('.meta-body-item > .date ')->count() == 0)
            $date = 'Inconnu';
        else
            $date = $this->crawler->filter('.meta-body-item > .date ')->text();

        return $date;
    }

    protected function extractSynopsis()
    {
        if ($this->crawler->filter('.synopsis-txt')->count() == 0) {
            $synopsis = 'Inconnu';
        } else {
            $synopsis = $this->crawler->filter('.synopsis-txt')->text();
        }
        return $synopsis;
    }

    protected function extractNationality()
    {
        if ($this->crawler->filter('.meta-body-item:contains("Nationalité")')->count() == 0) {
            $nationality = 'Inconnu';
        } else {
            $nationality = $this->crawler->filter('.meta-body-item:contains("Nationalité")')->text();
            $nationality = trim(preg_replace('/\s\s+/', ' ', $nationality));
            $nationality = str_replace('Nationalité', '', $nationality);
            $nationality = explode(' ', $nationality);
            unset($nationality[0]);
            $nationality = implode('', $nationality);
        }
        return $nationality;
    }

    protected function extractLength()
    {
        $tmp = $this->crawler->filter('.meta-body-item:contains("Date")')->extract('_text');
        $tmp = trim(preg_replace('/\s\s+/', ' ', $tmp[0]));
        if (preg_match('/(?<=\()(.+)(?=\))/is', $tmp, $matches)) {
            $length = $matches[0];
        } else {
            $length = '0h00min';
        }
        return $length;
    }
}
