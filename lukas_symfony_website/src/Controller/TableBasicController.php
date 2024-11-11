<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableBasicController extends AbstractController
{
    #[Route('/table-basic', name: 'app_table_basic')]
    public function index(): Response
    {
        return $this->render('table_basic/index.html.twig', [
            'controller_name' => 'TableBasicController',
        ]);
    }
}
