<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlertsController extends AbstractController
{
    #[Route('/alerts', name: 'app_alerts')]
    public function index(): Response
    {
        return $this->render('alerts/index.html.twig', [
            'controller_name' => 'AlertsController',
        ]);
    }
}
