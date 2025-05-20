<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PanierscommandesController extends AbstractController
{
    #[Route('/commande', name: 'commande')]
    public function pan(): Response
    {
        return $this->render('panierscommandes/afficheur_de_la_commande/commandes.html.twig', [
            'controller_name' => 'PanierscommandesController',
        ]);
    }

     #[Route('/panier', name: 'panier')]
    public function com(): Response
    {
        return $this->render('panierscommandes/afficheur_du_panier/panier.html.twig', [
            'controller_name' => 'PanierscommandesController',
        ]);
    }
}
