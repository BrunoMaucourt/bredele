<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RecipesController extends AbstractController

{
    #[Route('/recettes', name: 'recettes')]
    public function recettes(): Response
    {
        return $this->render('recipes.html.twig');
    }
}
