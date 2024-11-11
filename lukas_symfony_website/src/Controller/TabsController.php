<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TabsController extends AbstractController
{
    #[Route('/tabs', name: 'app_tabs')]
    public function index(): Response
    {
        return $this->render('tabs/index.html.twig', [
            'controller_name' => 'TabsController',
        ]);
    }
}
