<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackgroundController extends AbstractController
{
    #[Route('/background', name: 'app_background')]
    public function index(): Response
    {
        return $this->render('background/index.html.twig', [
            'controller_name' => 'BackgroundController',
        ]);
    }
}
