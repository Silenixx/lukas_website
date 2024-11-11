<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceAddProductController extends AbstractController
{
    #[Route('/ecommerce-add-product', name: 'app_ecommerce_add_product')]
    public function index(): Response
    {
        return $this->render('ecommerce_add_product/index.html.twig', [
            'controller_name' => 'EcommerceAddProductController',
        ]);
    }
}
