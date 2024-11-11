<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormAdvancedController extends AbstractController
{
    #[Route('/form-advanced', name: 'app_form_advanced')]
    public function index(): Response
    {
        return $this->render('form_advanced/index.html.twig', [
            'controller_name' => 'FormAdvancedController',
        ]);
    }
}
