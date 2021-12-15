<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Article extends Fixture
{
       // NON GÉRÉ POUR CE TP
    public function load(ObjectManager $manager): void
    {
        $manager->flush();
    }
         // $manager-> persist($product);
            // $product = new Product();
}