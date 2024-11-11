<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MediaObjectController extends AbstractController
{
    #[Route('/media-object', name: 'app_media_object')]
    public function index(): Response
    {
        return $this->render('media_object/index.html.twig', [
            'controller_name' => 'MediaObjectController',
        ]);
    }
}
