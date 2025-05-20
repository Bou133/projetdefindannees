<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoriesprController extends AbstractController
{
    #[Route('/categoriespr', name: 'categoriespr')]
    public function index(): Response
    {
        return $this->render('categories/categoriespr/categoriespr.html.twig', [
            'controller_name' => 'CategoriesprController',
        ]);
    }
}
