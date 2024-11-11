<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidgetsController extends AbstractController
{
    #[Route('/widgets', name: 'app_widgets')]
    public function index(): Response
    {
        return $this->render('widgets/index.html.twig', [
            'controller_name' => 'WidgetsController',
        ]);
    }
}