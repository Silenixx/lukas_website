<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoCurrencyExchangeController extends AbstractController
{
    #[Route('/crypto-currency-exchange', name: 'app_crypto_currency_exchange')]
    public function index(): Response
    {
        return $this->render('crypto_currency_exchange/index.html.twig', [
            'controller_name' => 'CryptoCurrencyExchangeController',
        ]);
    }
}
