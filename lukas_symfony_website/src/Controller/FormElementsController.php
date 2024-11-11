<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormElementsController extends AbstractController
{
    #[Route('/form-elements', name: 'app_form_elements')]
    public function index(): Response
    {
        return $this->render('form_elements/index.html.twig', [
            'controller_name' => 'FormElementsController',
        ]);
    }
}
