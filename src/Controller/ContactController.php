<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $contactRepository = $em->getRepository(Contact::class);
        $listeContact = $contactRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'listeContact'=>$listeContact
        ]);
    }
}
