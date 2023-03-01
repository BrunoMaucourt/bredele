<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class AccueilController extends AbstractController

{
    #[Route('/', name: 'accueil')]
    public function accueil(ManagerRegistry $doctrine): Response
    {
        $product = $doctrine->getRepository(Product::class)->findAll();
        $blog = $doctrine->getRepository(Blog::class)->findAll();
        return $this->render('accueil.html.twig',['product'=>$product,'blog'=>$blog]);
    }
}
