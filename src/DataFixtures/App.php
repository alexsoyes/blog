<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class App extends Fixture
{
    // NON GÉRÉ POUR CE TP
    public function load(ObjectManager $manager): void
    {
        $manager->flush();
    }
}