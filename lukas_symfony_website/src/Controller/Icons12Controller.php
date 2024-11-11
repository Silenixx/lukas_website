<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons12Controller extends AbstractController
{
    #[Route('/icons12', name: 'app_icons12')]
    public function index(): Response
    {
        return $this->render('icons12/index.html.twig', [
            'controller_name' => 'Icons12Controller',
        ]);
    }
}
