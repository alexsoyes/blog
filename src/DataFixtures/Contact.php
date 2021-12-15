<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity;

class Contact extends Fixture
{
    public function load(ObjectManager $manager): void {
        
// Creation d'un nouveau contact
        $contact = new \App\Entity\Contact();
        $contact = new Contact();

        $contact ->setName('NAUTE');
        $contact ->setFirstName('Enzo');
        $contact ->setMessage(19);
        $contact ->setNews(true);

        $manager->persist($contact);
// on met à jour les données dans la BD par un flush()
        $manager->flush();

// Creation d'un nouveau contact
        $contact1 = new \App\Entity\Contact();

        $contact1 -> setName('Johanna');
        $contact1 -> setFirstName('BLAME');
        $contact1 -> setAge(20);
        $contact1 -> setNewsletter(true);

        $manager->persist($contact1);
        $manager->flush();

// Creation d'un nouveau contact
        $contact3 = new \App\Entity\Contact();

        $contact3 -> setName('Emmanuel');
        $contact3 -> setFirstName('Macron');
        $contact3 -> setAge(115);
        $contact3 -> setNewsletter(false);

        $manager->persist($contact);
        $manager->flush();
    }
}
