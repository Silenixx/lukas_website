<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarginController extends AbstractController
{
    #[Route('/margin', name: 'app_margin')]
    public function index(): Response
    {
        return $this->render('margin/index.html.twig', [
            'controller_name' => 'MarginController',
        ]);
    }
}
