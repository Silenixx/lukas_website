<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserlistController extends AbstractController
{
    #[Route('/userlist', name: 'app_userlist')]
    public function index(): Response
    {
        return $this->render('userlist/index.html.twig', [
            'controller_name' => 'UserlistController',
        ]);
    }
}
