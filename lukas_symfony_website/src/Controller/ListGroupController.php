<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListGroupController extends AbstractController
{
    #[Route('/list-group', name: 'app_list_group')]
    public function index(): Response
    {
        return $this->render('list_group/index.html.twig', [
            'controller_name' => 'ListGroupController',
        ]);
    }
}
