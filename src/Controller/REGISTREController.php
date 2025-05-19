<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class REGISTREController extends AbstractController
{
    #[Route('/r/e/g/i/s/t/r/e', name: 'app_r_e_g_i_s_t_r_e')]
    public function index(): Response
    {
        return $this->render('registre/index.html.twig', [
            'controller_name' => 'REGISTREController',
        ]);
    }
}
