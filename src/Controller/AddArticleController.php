<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddArticleController extends AbstractController
{
       // NON GÉRÉ POUR CE TP
    #[Route('/addarticle', name: 'add_article')]
    public function index(): Response
    {
        return $this->render('add_article/index.html.twig', [
            'controller_name' => 'Ajouter un article',
        ]);
    }
}
