<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DangerMessageController extends AbstractController
{
    #[Route('/danger-message', name: 'app_danger_message')]
    public function index(): Response
    {
        return $this->render('danger_message/index.html.twig', [
            'controller_name' => 'DangerMessageController',
        ]);
    }
}
