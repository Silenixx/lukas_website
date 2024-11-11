<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FileDetailsController extends AbstractController
{
    #[Route('/file-details', name: 'app_file_details')]
    public function index(): Response
    {
        return $this->render('file_details/index.html.twig', [
            'controller_name' => 'FileDetailsController',
        ]);
    }
}
