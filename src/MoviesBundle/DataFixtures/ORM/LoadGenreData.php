<?php
namespace MoviesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MoviesBundle\Entity\Genre;

class LoadGenreData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $names = [
            'Action', 'Animation', 'Arts Martiaux', 'Aventure',
            'Biopic', 'Bollywood', 'Classique', 'Comédie',
            'Comédie dramatique', 'Comédie musicale', 'Concert', 'Dessin animé',
            'Divers', 'Documentaire', 'Drama', 'Drame',
            'Epouvante-horreur', 'Espionnage', 'Expérimental', 'Fantastique',
            'Guerre', 'Historique', 'Judiciaire', 'Médical', 'Musical',
            'Policier', 'Romance', 'Science fiction','Show','Thriller','Western'];

        foreach($names as $name){
            $genre = new Genre();
            $genre->setName($name);
            $manager->persist($genre);
            $manager->flush();
        }

    }
}

?>