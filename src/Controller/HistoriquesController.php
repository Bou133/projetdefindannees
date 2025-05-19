<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HistoriquesController extends AbstractController
{
    #[Route('/historiques', name: 'app_historiques')]
    public function index(): Response
    {
        return $this->render('historiques/index.html.twig', [
            'controller_name' => 'HistoriquesController',
        ]);
    }
}
