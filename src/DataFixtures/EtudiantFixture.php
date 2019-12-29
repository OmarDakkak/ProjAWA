<?php

namespace App\DataFixtures;

use App\Entity\Etudiants;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;

class EtudiantFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $faker = Factory::create('fr_FR');
        // for ($i=0; $i<20; $i++) {
        //     $etudiant = new Etudiants();
            
        // }
        // $manager->flush();
        // $product = new Product();
        // $manager->persist($product);

        // $manager->flush();
    }
}
