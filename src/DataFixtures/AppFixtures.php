<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commentaires;


use Faker\Core\DateTime as CoreDateTime;
use Faker\Guesser\Name;
use Faker\Factory;
use Faker\Generator as FakerGenerator;
use Faker\Provider\DateTime;
use Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;

namespace App\DataFixtures;
                
use App\Entity\Commentaires;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Core\DateTime as CoreDateTime;
use Faker\Guesser\Name;
use Faker\Factory;
use Faker\Generator as FakerGenerator;
use Faker\Provider\DateTime;
use Generator;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\User;



class AppFixtures extends Fixture
{

        private FakerGenerator $faker;

         /*private UserPasswordHasherInterface $userPasswordHasherInterface ;*/

         public function __construct(  /*UserPasswordHasherInterface $userPasswordHasherInterface*/  )
                    
                     
                     
                    {
                
                        $this->faker = Factory::create('fr_FR');
                       /*$this->userPasswordHasherInterface = $userPasswordHasherInterface ;*/
                        }
    public function load(ObjectManager $manager): void
    {     
           for ( $k= 1 ; $k < 10 ; $k++ ) {
                
                        $user = new User () ;
                          $user
                            
                            ->setEmail($this->faker->email())
                            
                            ->setRoles(['ROLE_USER'])
                              ->setPlainpassword2('password2')
                            /*->setPassword($this->userPasswordHasherInterface-> hashPassword()) ;*/
                
                            /*$hashPassword = $this->userPasswordHasherInterface->hashPassword(
                                $user,
                                'password'
                            );*/
                
                            ->setPlainPassword('Password');
                             

                
                         //$users[] = $user;
                         $manager->persist($user);
                    } 

                     for( $i = 0 ; $i < 10 ; $i++ ) {
                
                $commentaires = new Commentaires() ;
                    $commentaires
                                ->setContenu($this->faker->text())
                                 ->setEmail( $this->faker->email())
                                 ->setPseudo($this->faker->Name());
                                //->setUser($users[mt_rand ( 0 , count($users) - 1 ) ]);       
                                //$commentaires[] = $commentaires; 
                                $manager->persist($commentaires);
                            } 
                
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
