<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PromotionreductionController extends AbstractController
{
    #[Route('/promotion', name: 'promotion')]
    public function promotion(): Response
    {
        return $this->render('categories/afficheur_de_promotions/promotion.html.twig', [
            'controller_name' => 'PromotionreductionController',
        ]);
    }

     #[Route('/reduction', name: 'reduction')]
    public function reduction(): Response
    {
        return $this->render('categories/afficheur_de_réduction/reduction.html.twig', [
            'controller_name' => 'PromotionreductionController',
        ]);
    }
}
