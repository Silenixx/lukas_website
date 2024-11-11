<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons6Controller extends AbstractController
{
    #[Route('/icons6', name: 'app_icons6')]
    public function index(): Response
    {
        return $this->render('icons6/index.html.twig', [
            'controller_name' => 'Icons6Controller',
        ]);
    }
}
