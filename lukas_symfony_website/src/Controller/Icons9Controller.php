<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons9Controller extends AbstractController
{
    #[Route('/icons9', name: 'app_icons9')]
    public function index(): Response
    {
        return $this->render('icons9/index.html.twig', [
            'controller_name' => 'Icons9Controller',
        ]);
    }
}
