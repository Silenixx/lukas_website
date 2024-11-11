<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceWishlistController extends AbstractController
{
    #[Route('/ecommerce-wishlist', name: 'app_ecommerce_wishlist')]
    public function index(): Response
    {
        return $this->render('ecommerce_wishlist/index.html.twig', [
            'controller_name' => 'EcommerceWishlistController',
        ]);
    }
}
