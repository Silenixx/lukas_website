<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BorderController extends AbstractController
{
    #[Route('/border', name: 'app_border')]
    public function index(): Response
    {
        return $this->render('border/index.html.twig', [
            'controller_name' => 'BorderController',
        ]);
    }
}
