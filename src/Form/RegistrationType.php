<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

             ->add('email', TextType::class , [
                'attr' => [ 'class' => 'form-control'],
                'label' => 'email' ,
            ])
            ->add('plainpassword' , RepeatedType::class , [
                'type' => PasswordType::class , 
                'first_options' => [
                'attr'=> [ 'class'=>'form-control' ],
                'label' =>'mot de passe', ] ,
                'second_options' => [
                'attr'=> [ 'class'=>'form-control' ] ,
                'label' => 'confirmation de mot de passe' ],

                
            ])

            ->add('Plainpassword2')
            /*->add('Fullname' , TextType::class , [
                'attr' => [ 'class' => 'form-control'],
                'label' => 'prenom' , ])
            ->add('Pseudo' , TextType::class , [
                'attr' => [ 'class' => 'form-control'],
                'label' => 'Pseudo' ,  ])*/
            ->add('submit' , SubmitType::class );
           
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
