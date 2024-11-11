<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormLayoutsController extends AbstractController
{
    #[Route('/form-layouts', name: 'app_form_layouts')]
    public function index(): Response
    {
        return $this->render('form_layouts/index.html.twig', [
            'controller_name' => 'FormLayoutsController',
        ]);
    }
}
