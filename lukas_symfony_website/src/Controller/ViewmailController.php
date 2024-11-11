<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewmailController extends AbstractController
{
    #[Route('/viewmail', name: 'app_viewmail')]
    public function index(): Response
    {
        return $this->render('viewmail/index.html.twig', [
            'controller_name' => 'ViewmailController',
        ]);
    }
}
