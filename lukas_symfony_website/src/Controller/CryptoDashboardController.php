<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CryptoDashboardController extends AbstractController
{
    #[Route('/crypto-dashboard', name: 'app_crypto_dashboard')]
    public function index(): Response
    {
        return $this->render('crypto_dashboard/index.html.twig', [
            'controller_name' => 'CryptoDashboardController',
        ]);
    }
}
