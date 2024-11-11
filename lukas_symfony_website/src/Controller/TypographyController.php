<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypographyController extends AbstractController
{
    #[Route('/typography', name: 'app_typography')]
    public function index(): Response
    {
        return $this->render('typography/index.html.twig', [
            'controller_name' => 'TypographyController',
        ]);
    }
}
