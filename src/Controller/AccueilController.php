<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController

{
    public function accueil(): Response
    {
        return $this->render('accueil.html.twig');
        //$contents = $this->renderView("accueil.html.twig");
        //return new Response($contents);
    }
}
