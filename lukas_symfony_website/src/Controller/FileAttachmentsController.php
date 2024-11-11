<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileAttachmentsController extends AbstractController
{
    #[Route('/file-attachments', name: 'app_file_attachments')]
    public function index(): Response
    {
        return $this->render('file_attachments/index.html.twig', [
            'controller_name' => 'FileAttachmentsController',
        ]);
    }
}
