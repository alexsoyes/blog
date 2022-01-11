<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;
use App\Entity\Contact;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $datas = [
            [
                'nom'=>'Romain',
                'slug'=>'',
                'contenue'=>'Super ça marche'
            ],
            [
                'nom'=>'Test',
                'slug'=>'',
                'contenue'=>'Super ça marche 2'
            ],
        ];
        $Contacts=[
            [
                'nom'=>"Guicheteau",
                'prenom'=>"Romain",
                'mail'=>"romain.guicheteau@gmail.com",
                'sujet'=>"ssss",
                'message'=>"test test",
                'newsletter'=>true
            ],
            [
                'nom'=>"Salamone",
                'prenom'=>"charlène",
                'mail'=>"charlene.salamone@gmail.com",
                'sujet'=>"ssss",
                'message'=>"chachou chachou",
                'newsletter'=>false
            ]
            ];
        foreach ($datas as $value) {
            $article = new Article();
            $article->setNom($value['nom']);
            $article->setSlug($value['slug']);
            $article->setContenu($value['contenue']);
            $manager->persist($article);
        }

        foreach ($Contacts as $value) {
            $contact= new Contact();
            $contact->setNom($value['nom']);
            $contact->setPrenom($value['prenom']);
            $contact->setMail($value['mail']);
            $contact->setSujet($value['sujet']);
            $contact->setMessage($value['message']);
            $contact->setNewsletter($value['newsletter']);
            $manager->persist($article);
        }
        

        $manager->flush();
        $manager->flush();
    }
}
