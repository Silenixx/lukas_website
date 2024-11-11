<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EcommerceDashboardController extends AbstractController
{
    #[Route('/ecommerce-dashboard', name: 'app_ecommerce_dashboard')]
    public function index(): Response
    {
        return $this->render('ecommerce_dashboard/index.html.twig', [
            'controller_name' => 'EcommerceDashboardController',
        ]);
    }
}
