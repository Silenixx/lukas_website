<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartEchartController extends AbstractController
{
    #[Route('/chart-echart', name: 'app_chart_echart')]
    public function index(): Response
    {
        return $this->render('chart_echart/index.html.twig', [
            'controller_name' => 'ChartEchartController',
        ]);
    }
}
