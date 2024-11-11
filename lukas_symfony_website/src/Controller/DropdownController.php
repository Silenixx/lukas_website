<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DropdownController extends AbstractController
{
    #[Route('/dropdown', name: 'app_dropdown')]
    public function index(): Response
    {
        return $this->render('dropdown/index.html.twig', [
            'controller_name' => 'DropdownController',
        ]);
    }
}
