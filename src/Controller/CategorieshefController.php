<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategorieshefController extends AbstractController
{
    #[Route('/categorieshef', name: 'categorieshef')]
    public function index(): Response
    {
        return $this->render('categories/categorieshef/categorieshef.html.twig', [
            'controller_name' => 'CategorieshefController',
        ]);
    }
}
