<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactForm;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @var ContactRepository
     */

// On initialise notre Repo qui va aller taper dans la DB
    private $contactRepository;
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

//Route de la page contact nomade
    /**
     * @Route("/contact/", name="contact")
     */
    public function index(Request $request, SessionInterface $session): Response
    {
        $name = $request->query->get('name');

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Controleur de Contact',
            'name' => $name,
            'contacts' => $this->contactRepository->findAll(),
        ]);
    }

//Route de la page contact incluant le nom de la ville
    /**
     * @Route("/contact/{ville}", name="contactCity")
     */
    public function contactCity(Request $request, string $ville): Response
    {
        $name = $request->query->get('name');

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'Controleur Contact avec ville!',
            'name' => $name,
            'ville' => $ville,
        ]);
    }
}
