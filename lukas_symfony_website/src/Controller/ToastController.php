<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToastController extends AbstractController
{
    #[Route('/toast', name: 'app_toast')]
    public function index(): Response
    {
        return $this->render('toast/index.html.twig', [
            'controller_name' => 'ToastController',
        ]);
    }
}
