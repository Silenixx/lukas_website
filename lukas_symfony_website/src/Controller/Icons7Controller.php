<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Icons7Controller extends AbstractController
{
    #[Route('/icons7', name: 'app_icons7')]
    public function index(): Response
    {
        return $this->render('icons7/index.html.twig', [
            'controller_name' => 'Icons7Controller',
        ]);
    }
}
