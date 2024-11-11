<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormValidationController extends AbstractController
{
    #[Route('/form-validation', name: 'app_form_validation')]
    public function index(): Response
    {
        return $this->render('form_validation/index.html.twig', [
            'controller_name' => 'FormValidationController',
        ]);
    }
}
