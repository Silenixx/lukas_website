<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FilemanagerListController extends AbstractController
{
    #[Route('/filemanager-list', name: 'app_filemanager_list')]
    public function index(): Response
    {
        return $this->render('filemanager_list/index.html.twig', [
            'controller_name' => 'FilemanagerListController',
        ]);
    }
}
