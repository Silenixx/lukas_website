<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailInboxController extends AbstractController
{
    #[Route('/mail-inbox', name: 'app_mail_inbox')]
    public function index(): Response
    {
        return $this->render('mail_inbox/index.html.twig', [
            'controller_name' => 'MailInboxController',
        ]);
    }
}
