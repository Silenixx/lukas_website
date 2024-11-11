<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableDataController extends AbstractController
{
    #[Route('/table-data', name: 'app_table_data')]
    public function index(): Response
    {
        return $this->render('table_data/index.html.twig', [
            'controller_name' => 'TableDataController',
        ]);
    }
}
