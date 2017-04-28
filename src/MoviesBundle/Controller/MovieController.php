<?php

namespace MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MovieController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoviesBundle:Movie:index.html.twig');
    }
}
