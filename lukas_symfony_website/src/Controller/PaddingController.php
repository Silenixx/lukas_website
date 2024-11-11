<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaddingController extends AbstractController
{
    #[Route('/padding', name: 'app_padding')]
    public function index(): Response
    {
        return $this->render('padding/index.html.twig', [
            'controller_name' => 'PaddingController',
        ]);
    }
}
