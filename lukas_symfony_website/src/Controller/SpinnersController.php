<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SpinnersController extends AbstractController
{
    #[Route('/spinners', name: 'app_spinners')]
    public function index(): Response
    {
        return $this->render('spinners/index.html.twig', [
            'controller_name' => 'SpinnersController',
        ]);
    }
}
