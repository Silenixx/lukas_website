<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Error500Controller extends AbstractController
{
    #[Route('/error500', name: 'app_error500')]
    public function index(): Response
    {
        return $this->render('error500/index.html.twig', [
            'controller_name' => 'Error500Controller',
        ]);
    }
}
