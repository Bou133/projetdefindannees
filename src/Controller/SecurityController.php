<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class SecurityController extends AbstractController
{
     #[Route('/connexion2', name:'securitycontroller.login', methods: ['GET','POST'])]
    public function login( AuthenticationUtils $authenticationUtils ): Response
    {       
        $lastUsername = $authenticationUtils -> getLastUsername();
        $error = $authenticationUtils->getLastAuthenticationError();

        return $this->render('connexioncompteutilisateur/afficheur_de_compte/connexion.html.twig', [
            'last_username' => $authenticationUtils -> getLastUsername() ,
            'error'=>  $authenticationUtils->getLastAuthenticationError(),
            'controller_name' => 'SecuritycontrollerController',
        ]);

        
    }


   
   
    #[Route('/déconnexion', name: 'security.logout'  )]
    public function logout()
    {
       // don't put something here ...
    }


    #[Route( '/inscription' , 'security.registration' , methods:['GET' , 'POST'])]
    public function registration( Request $request  , EntityManagerInterface $manager ) : Response
    {   $user = new User ();
        $user->setRoles(['ROLE_USER']);
        $form = $this->createForm(RegistrationType::class , $user );

        $form->handleRequest($request) ;
        if($form->isSubmitted() && $form->isValid()){
            $user = $form->getData();

            $manager->persist($user);
            $manager->flush();

            $this->addFlash(
                'success',
                'votre compte a bien été créé'
            );


            return $this->redirectToRoute('securitycontroller.login');

        }
        
        return $this->render ( 'connexioncompteutilisateur/afficheur_inscription/inscription.html.twig' , [
             'form'  => $form ->createView(),
        ]);
    
    }      


}
    
