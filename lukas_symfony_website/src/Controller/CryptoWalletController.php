<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoWalletController extends AbstractController
{
    #[Route('/crypto-wallet', name: 'app_crypto_wallet')]
    public function index(): Response
    {
        return $this->render('crypto_wallet/index.html.twig', [
            'controller_name' => 'CryptoWalletController',
        ]);
    }
}
