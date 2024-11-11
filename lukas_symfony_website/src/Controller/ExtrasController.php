<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExtrasController extends AbstractController
{
    #[Route('/extras', name: 'app_extras')]
    public function index(): Response
    {
        return $this->render('extras/index.html.twig', [
            'controller_name' => 'ExtrasController',
        ]);
    }
}
