<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons8Controller extends AbstractController
{
    #[Route('/icons8', name: 'app_icons8')]
    public function index(): Response
    {
        return $this->render('icons8/index.html.twig', [
            'controller_name' => 'Icons8Controller',
        ]);
    }
}
