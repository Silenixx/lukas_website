<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UnderconstructionController extends AbstractController
{
    #[Route('/underconstruction', name: 'app_underconstruction')]
    public function index(): Response
    {
        return $this->render('underconstruction/index.html.twig', [
            'controller_name' => 'UnderconstructionController',
        ]);
    }
}
