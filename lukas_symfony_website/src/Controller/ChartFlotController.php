<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ChartFlotController extends AbstractController
{
    #[Route('/chart-flot', name: 'app_chart_flot')]
    public function index(): Response
    {
        return $this->render('chart_flot/index.html.twig', [
            'controller_name' => 'ChartFlotController',
        ]);
    }
}
