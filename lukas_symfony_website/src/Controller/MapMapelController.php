<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MapMapelController extends AbstractController
{
    #[Route('/map-mapel', name: 'app_map_mapel')]
    public function index(): Response
    {
        return $this->render('map_mapel/index.html.twig', [
            'controller_name' => 'MapMapelController',
        ]);
    }
}
