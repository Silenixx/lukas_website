<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormEditorController extends AbstractController
{
    #[Route('/form-editor', name: 'app_form_editor')]
    public function index(): Response
    {
        return $this->render('form_editor/index.html.twig', [
            'controller_name' => 'FormEditorController',
        ]);
    }
}
