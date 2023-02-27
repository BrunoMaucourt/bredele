<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends AbstractController

{
    #[Route('/mesCommandes', name: 'mesCommandes')]
    public function order(): Response
    {
        return $this->render('order.html.twig');
    }
}
