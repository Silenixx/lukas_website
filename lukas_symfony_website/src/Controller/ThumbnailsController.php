<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThumbnailsController extends AbstractController
{
    #[Route('/thumbnails', name: 'app_thumbnails')]
    public function index(): Response
    {
        return $this->render('thumbnails/index.html.twig', [
            'controller_name' => 'ThumbnailsController',
        ]);
    }
}
