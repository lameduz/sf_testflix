<?php

namespace MoviesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Host
 *
 * @ORM\Table(name="host")
 * @ORM\Entity(repositoryClass="MoviesBundle\Repository\HostRepository")
 */
class Host
{
    /**
     * @ORM\ManyToOne(targetEntity="Movie")
     * @ORM\JoinColumn(name="movie_id", referencedColumnName="id",nullable=false)
     */
    private $movie;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="uri", type="string", length=255)
     */
    private $uri;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Host
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set uri
     *
     * @param string $uri
     *
     * @return Host
     */
    public function setUri($uri)
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get uri
     *
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Set movie
     *
     * @param \MoviesBundle\Entity\Movie $movie
     *
     * @return Host
     */
    public function setMovie(\MoviesBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \MoviesBundle\Entity\Movie
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
