<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HeightController extends AbstractController
{
    #[Route('/height', name: 'app_height')]
    public function index(): Response
    {
        return $this->render('height/index.html.twig', [
            'controller_name' => 'HeightController',
        ]);
    }
}
