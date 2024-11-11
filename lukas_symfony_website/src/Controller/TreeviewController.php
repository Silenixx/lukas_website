<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TreeviewController extends AbstractController
{
    #[Route('/treeview', name: 'app_treeview')]
    public function index(): Response
    {
        return $this->render('treeview/index.html.twig', [
            'controller_name' => 'TreeviewController',
        ]);
    }
}
