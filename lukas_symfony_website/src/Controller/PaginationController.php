<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaginationController extends AbstractController
{
    #[Route('/pagination', name: 'app_pagination')]
    public function index(): Response
    {
        return $this->render('pagination/index.html.twig', [
            'controller_name' => 'PaginationController',
        ]);
    }
}
