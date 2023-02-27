<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ConnectionController extends AbstractController
{
    #[Route('/connexion', name: 'connexion')]
    public function connection(): Response
    {
        return $this->render('connection.html.twig');
    }

    public function checkIfConnected()
    {

    }
}
