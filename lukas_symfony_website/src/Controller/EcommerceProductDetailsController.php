<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceProductDetailsController extends AbstractController
{
    #[Route('/ecommerce-product-details', name: 'app_ecommerce_product_details')]
    public function index(): Response
    {
        return $this->render('ecommerce_product_details/index.html.twig', [
            'controller_name' => 'EcommerceProductDetailsController',
        ]);
    }
}
