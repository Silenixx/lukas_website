<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceProductsController extends AbstractController
{
    #[Route('/ecommerce-products', name: 'app_ecommerce_products')]
    public function index(): Response
    {
        return $this->render('ecommerce_products/index.html.twig', [
            'controller_name' => 'EcommerceProductsController',
        ]);
    }
}
