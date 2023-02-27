<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CartController extends AbstractController

{
    #[Route('/panier', name: 'panier')]
    public function cart(): Response
    {
        return $this->render('cart.html.twig');
    }
}
