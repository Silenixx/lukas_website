<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormWizardController extends AbstractController
{
    #[Route('/form-wizard', name: 'app_form_wizard')]
    public function index(): Response
    {
        return $this->render('form_wizard/index.html.twig', [
            'controller_name' => 'FormWizardController',
        ]);
    }
}
