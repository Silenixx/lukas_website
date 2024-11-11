<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons4Controller extends AbstractController
{
    #[Route('/icons4', name: 'app_icons4')]
    public function index(): Response
    {
        return $this->render('icons4/index.html.twig', [
            'controller_name' => 'Icons4Controller',
        ]);
    }
}
