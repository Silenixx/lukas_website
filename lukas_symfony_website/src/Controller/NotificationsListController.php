<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotificationsListController extends AbstractController
{
    #[Route('/notifications-list', name: 'app_notifications_list')]
    public function index(): Response
    {
        return $this->render('notifications_list/index.html.twig', [
            'controller_name' => 'NotificationsListController',
        ]);
    }
}
