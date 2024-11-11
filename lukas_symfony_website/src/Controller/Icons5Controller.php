<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons5Controller extends AbstractController
{
    #[Route('/icons5', name: 'app_icons5')]
    public function index(): Response
    {
        return $this->render('icons5/index.html.twig', [
            'controller_name' => 'Icons5Controller',
        ]);
    }
}
