<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailComposeController extends AbstractController
{
    #[Route('/mail-compose', name: 'app_mail_compose')]
    public function index(): Response
    {
        return $this->render('mail_compose/index.html.twig', [
            'controller_name' => 'MailComposeController',
        ]);
    }
}
