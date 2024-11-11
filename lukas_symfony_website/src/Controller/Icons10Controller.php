<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons10Controller extends AbstractController
{
    #[Route('/icons10', name: 'app_icons10')]
    public function index(): Response
    {
        return $this->render('icons10/index.html.twig', [
            'controller_name' => 'Icons10Controller',
        ]);
    }
}
