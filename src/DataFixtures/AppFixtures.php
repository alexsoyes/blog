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
        foreach ($datas as $value) {
            $article = new Article();
            $article->setNom($value['nom']);
            $article->setSlug($value['slug']);
            $article->setContenu($value['contenue']);
            $manager->persist($article);
        }
        

        $manager->flush();

        $manager->flush();
    }
}
