<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DraggablecardController extends AbstractController
{
    #[Route('/draggablecard', name: 'app_draggablecard')]
    public function index(): Response
    {
        return $this->render('draggablecard/index.html.twig', [
            'controller_name' => 'DraggablecardController',
        ]);
    }
}
