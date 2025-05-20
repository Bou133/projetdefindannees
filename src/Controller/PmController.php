<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PmController extends AbstractController
{
    #[Route('/paniercommande', name: 'paniercommande')]
    public function index(): Response
    {
        return $this->render('panierscommandes/pm/pm.html.twig', [
            'controller_name' => 'PmController',
        ]);
    }
}
