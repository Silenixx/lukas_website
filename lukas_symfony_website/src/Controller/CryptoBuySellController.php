<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoBuySellController extends AbstractController
{
    #[Route('/crypto-buy-sell', name: 'app_crypto_buy_sell')]
    public function index(): Response
    {
        return $this->render('crypto_buy_sell/index.html.twig', [
            'controller_name' => 'CryptoBuySellController',
        ]);
    }
}
