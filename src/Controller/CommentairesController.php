<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Form\CrudcommentairesType;
use App\Repository\CommentairesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommentairesController extends AbstractController

   {
    #[Route('/afficheur/de/commentaires', name: 'commentaires')]
    public function index( CommentairesRepository $commentairesRepository): Response
    {
        $commentaires = $commentairesRepository->findAll();
        return $this->render('registre/afficheur_de_commentaires/commentaires.html.twig', [
            'commentaires' => $commentaires ,
        ]);
    }

    

 
 
 
     #[Route ('/afficheur/de/commentaires/ajout' ,name:'commandes_ajout' , methods: ['GET' , 'POST'])]
     public function nouveau1(  Request $request , EntityManagerInterface $manager    ): Response
     {
        
        $commentaires = new Commentaires ;
        $form = $this->createForm( CrudcommentairesType::class ,  $commentaires );
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()){
            $commentaires = $form->getData();
      
        
        $manager->persist($commentaires);

        $manager->flush(); 
        $this->addFlash('success', 'votre commentaire a été ajouté avec success.');
        return $this->redirectToRoute('app_afficheur_de_commentaires');
     }


        return $this->render ('registre/afficheur_de_commentaires/Page_ajoutcommentaires.html.twig' ,  [
           'form'=>$form->createView()
           
        ]);
     }

     #[Route ('/afficheur/de/commentaires/edition/{id}' ,name:'commandes_edition' , methods: ['GET' , 'POST'])]
     public function nouveau(  Request $request , EntityManagerInterface $manager    , Commentaires $commentaires): Response
     {
        
       
        $form = $this->createForm( CrudcommentairesType::class ,  $commentaires );
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()){
            $commentaires = $form->getData();
      
        
        $manager->persist($commentaires);

        $manager->flush(); 
        $this->addFlash('success', 'votre commentaire a été modifié avec success.');
        return $this->redirectToRoute('app_afficheur_de_commentaires');
     }


        return $this->render ('registre/afficheur_de_commentaires/Page_ajoutcommentaires.html.twig' ,  [
           'form'=>$form->createView()
           
        ]);
     }

    

     #[Route ('/afficheur/de/commentaires/suppression/{id}' ,name:'commandes_suppression' , methods: ['GET' , 'POST'])]
     public function supprime(  Request $request , EntityManagerInterface $manager    , Commentaires $commentaires ): Response
     {
        
       
        $form = $this->createForm(CrudcommentairesType::class , $commentaires );
        $form->handleRequest($request); 
        if ($form->isSubmitted() && $form->isValid()){
            $commentaires = $form->getData();
      
        
        $manager->remove($commentaires);

        $manager->flush(); 
        $this->addFlash('success', 'votre commentaire a été supprimé avec success.');
        return $this->redirectToRoute('app_afficheur_de_commentaires');
     }


        return $this->render ('registre/afficheur_de_commentaires/Page_supprimercommentaires.html.twig' ,  [
            'form'=>$form->createView()
            ]);
    }
}
