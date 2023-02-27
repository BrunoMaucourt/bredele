<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class MyProfilController extends AbstractController

{
    #[Route('/monProfil', name: 'monProfil')]
    public function myProfil(): Response
    {
        return $this->render('myProfil.html.twig');
    }
}
