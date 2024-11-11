<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceCheckoutController extends AbstractController
{
    #[Route('/ecommerce-checkout', name: 'app_ecommerce_checkout')]
    public function index(): Response
    {
        return $this->render('ecommerce_checkout/index.html.twig', [
            'controller_name' => 'EcommerceCheckoutController',
        ]);
    }
}
