<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
     #[Route('/utilisateur/edition/{id}', name: 'security.registration2' , methods : ['GET' , 'POST'] ,)]
    public function edit ( User $user , Request $request ,  EntityManagerInterface $manager , UserPasswordHasherInterface $hasher  ): Response
    {     if ( !$this->getUser() ) {
        
            return $this->redirectToRoute('securitycontroller.login');
        
    }
        if($this->getUser() !== $user){
        return $this->redirectToRoute('security.registration'); 
         
        }
        

       $form = $this->createForm(UserType::class , $user ) ;
       $form->handleRequest($request) ;
       if($form->isSubmitted() && $form->isValid()){
         if ( $hasher->isPasswordValid( $user , $form->getData()->getPlainpassword()  ) ){
            $user->setPlainpassword(
                $form->getData()->getNewPassword()
            ); 
            $user = $form->getData();

           $manager->persist($user);
           $manager->flush();

           $this->addFlash(
               'success',
               'votre compte a bien été créé'
           );
            
           return $this->redirectToRoute('security.registration'); 
        } else {
            $this->addFlash(
                'warning' ,
                'le mot de passe renseigné est incorect . ');
            
        }
    }
    

        return $this->render('afficheur_inscription/formulaire.html.twig', [
            'form' =>$form->createView(),
        ]);

         
           
    }

    

}
   
