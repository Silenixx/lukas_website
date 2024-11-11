<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModalsController extends AbstractController
{
    #[Route('/modals', name: 'app_modals')]
    public function index(): Response
    {
        return $this->render('modals/index.html.twig', [
            'controller_name' => 'ModalsController',
        ]);
    }
}
