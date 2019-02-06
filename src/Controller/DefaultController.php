<?php // src/Controller/DefaultController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController{

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function index(Request $request) : Response
    {
        return new Response('Accueil - Hello '.$request->get('name'));
    }
}