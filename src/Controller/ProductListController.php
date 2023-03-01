<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductListController extends AbstractController

{
    #[Route('/productList', name: 'productList')]
    public function productList(): Response
    {
        return $this->render('productList.html.twig');
    }
}
