<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FlexController extends AbstractController
{
    #[Route('/flex', name: 'app_flex')]
    public function index(): Response
    {
        return $this->render('flex/index.html.twig', [
            'controller_name' => 'FlexController',
        ]);
    }
}
