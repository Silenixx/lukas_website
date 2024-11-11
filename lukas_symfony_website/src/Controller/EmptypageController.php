<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmptypageController extends AbstractController
{
    #[Route('/emptypage', name: 'app_emptypage')]
    public function index(): Response
    {
        return $this->render('emptypage/index.html.twig', [
            'controller_name' => 'EmptypageController',
        ]);
    }
}
