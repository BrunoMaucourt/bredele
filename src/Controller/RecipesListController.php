<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class RecipesListController extends AbstractController

{
    #[Route('/listeRecettes', name: 'listeRecettes')]
    public function recettesList(): Response
    {
        return $this->render('recipesList.html.twig');
    }
}
