<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PanierscommandesController extends AbstractController
{
    #[Route('/panierscommandes', name: 'app_panierscommandes')]
    public function index(): Response
    {
        return $this->render('panierscommandes/index.html.twig', [
            'controller_name' => 'PanierscommandesController',
        ]);
    }
}
