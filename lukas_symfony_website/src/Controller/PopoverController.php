<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PopoverController extends AbstractController
{
    #[Route('/popover', name: 'app_popover')]
    public function index(): Response
    {
        return $this->render('popover/index.html.twig', [
            'controller_name' => 'PopoverController',
        ]);
    }
}
