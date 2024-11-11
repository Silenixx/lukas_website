<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LockscreenController extends AbstractController
{
    #[Route('/lockscreen', name: 'app_lockscreen')]
    public function index(): Response
    {
        return $this->render('lockscreen/index.html.twig', [
            'controller_name' => 'LockscreenController',
        ]);
    }
}
