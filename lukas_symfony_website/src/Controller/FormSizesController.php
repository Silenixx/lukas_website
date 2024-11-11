<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormSizesController extends AbstractController
{
    #[Route('/form-sizes', name: 'app_form_sizes')]
    public function index(): Response
    {
        return $this->render('form_sizes/index.html.twig', [
            'controller_name' => 'FormSizesController',
        ]);
    }
}
