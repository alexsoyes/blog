<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity;

class AppFixtures extends Fixture
{
       // NON GÉRÉ POUR CE TP
    public function load(ObjectManager $manager): void
    {
        $manager->flush();
    }
}