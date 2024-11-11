<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartSparkPeityController extends AbstractController
{
    #[Route('/chart-spark-peity', name: 'app_chart_spark_peity')]
    public function index(): Response
    {
        return $this->render('chart_spark_peity/index.html.twig', [
            'controller_name' => 'ChartSparkPeityController',
        ]);
    }
}
