<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController

{
    #[Route('/product', name: 'product')]
    public function product(): Response
    {
        return $this->render('product.html.twig');
    }
}
