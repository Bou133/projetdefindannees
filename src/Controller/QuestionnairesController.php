<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QuestionnairesController extends AbstractController
{
    #[Route('/questionnaires', name: 'questionnaires')]
    public function index(): Response
    {
        return $this->render('registre/afficheur_de_questionnaires/questionnaires1.html.twig', [
            'controller_name' => 'QuestionnairesController',
        ]);
    }
}
