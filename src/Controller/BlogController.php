<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    private  $contactRepository;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    // On va générer un gestionnaire d'entité qui va calculer le total des demandes de contact
    public function totalContact()
    {
        $entityManager = $this-> getDoctrine() -> getManager();
        $TableContact = $entityManager->getRepository(Contact::class);

    // Il se sert du repo afin de comptabiliser les valeurs
        return $TableContact->createQueryBuilder('contact')
        // on selectionne la table Contact dans notre BD
            ->select('COUNT(contact)')
        // et on aspire l'output de requête pour les definir en nombres (scalaire)
            ->getQuery()
            ->getSingleScalarResult();
    }


            #[Route('/blog', name: 'blog')]
            public function index(): Response
            {
                if ($form->isSubmitted() && $form->isValid()){
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($form->getData());
                    $entityManager->flush();
        
                    dump("CA MARCHE");
                }

                return $this->render('blog/index.html.twig', [
                    'controller_name' => 'Controleur de Blog',
                ]);
            }
    
}
