<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartChartjsController extends AbstractController
{
    #[Route('/chart-chartjs', name: 'app_chart_chartjs')]
    public function index(): Response
    {
        return $this->render('chart_chartjs/index.html.twig', [
            'controller_name' => 'ChartChartjsController',
        ]);
    }
}
