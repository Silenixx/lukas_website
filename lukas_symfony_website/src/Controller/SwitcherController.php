<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SwitcherController extends AbstractController
{
    #[Route('/switcher', name: 'app_switcher')]
    public function index(): Response
    {
        return $this->render('switcher/index.html.twig', [
            'controller_name' => 'SwitcherController',
        ]);
    }
}
