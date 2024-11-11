<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WidthController extends AbstractController
{
    #[Route('/width', name: 'app_width')]
    public function index(): Response
    {
        return $this->render('width/index.html.twig', [
            'controller_name' => 'WidthController',
        ]);
    }
}
