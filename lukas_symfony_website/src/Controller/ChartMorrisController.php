<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartMorrisController extends AbstractController
{
    #[Route('/chart-morris', name: 'app_chart_morris')]
    public function index(): Response
    {
        return $this->render('chart_morris/index.html.twig', [
            'controller_name' => 'ChartMorrisController',
        ]);
    }
}
