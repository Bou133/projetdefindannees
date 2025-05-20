<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CategoriesController extends AbstractController
{
    #[Route('/categoriesenfants', name: 'enfants')]
    public function index1(): Response
    {
        return $this->render('categories/afficheur_de_categories_enfants/Enfants.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }

     #[Route('/categoriesfemmes', name: 'femmes')]
    public function index2(): Response
    {
        return $this->render('categories/afficheur_de_categories_femmes/Femmes.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }

      #[Route('/categorieshommes', name: 'hommes')]
    public function index3(): Response
    {
        return $this->render('categories/afficheur_de_categories_hommes/Hommes.html.twig', [
            'controller_name' => 'CategoriesController',
        ]);
    }
}
