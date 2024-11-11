<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoMarketController extends AbstractController
{
    #[Route('/crypto-market', name: 'app_crypto_market')]
    public function index(): Response
    {
        return $this->render('crypto_market/index.html.twig', [
            'controller_name' => 'CryptoMarketController',
        ]);
    }
}
