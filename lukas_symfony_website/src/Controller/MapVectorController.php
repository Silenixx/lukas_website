<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapVectorController extends AbstractController
{
    #[Route('/map-vector', name: 'app_map_vector')]
    public function index(): Response
    {
        return $this->render('map_vector/index.html.twig', [
            'controller_name' => 'MapVectorController',
        ]);
    }
}
