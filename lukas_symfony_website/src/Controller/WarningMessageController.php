<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WarningMessageController extends AbstractController
{
    #[Route('/warning-message', name: 'app_warning_message')]
    public function index(): Response
    {
        return $this->render('warning_message/index.html.twig', [
            'controller_name' => 'WarningMessageController',
        ]);
    }
}
