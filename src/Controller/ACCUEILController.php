<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ACCUEILController extends AbstractController
{

     #[Route('/accueil', name: 'accueil')]
    public function index( ): Response
    {
        return $this->render('page_accueil/accueil.html.twig', [
            'controller_name' => 'PageAccueilController',
        ]);
    
    }
}
