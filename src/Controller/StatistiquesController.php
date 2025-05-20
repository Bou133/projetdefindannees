<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StatistiquesController extends AbstractController
{
    #[Route('/statistiques', name: 'statistiques')]
    public function index(): Response
    {
        return $this->render('registre/afficheur_de_statistiques/statistiques.html.twig', [
            'controller_name' => 'StatistiquesController',
        ]);
    }
}
