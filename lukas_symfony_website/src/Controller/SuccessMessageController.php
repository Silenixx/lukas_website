<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuccessMessageController extends AbstractController
{
    #[Route('/success-message', name: 'app_success_message')]
    public function index(): Response
    {
        return $this->render('success_message/index.html.twig', [
            'controller_name' => 'SuccessMessageController',
        ]);
    }
}
