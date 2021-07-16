<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index()
    {
        //Affiche la liste des contact
        $em = $this->getDoctrine()->getManager();
        $contactRepository = $em->getRepository(Contact::class);
        $listeContact = $contactRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'listeContact'=>$listeContact
        ]);
    }

    /**
     * @Route("/contact-details/{id}", name="contact-details")
     */
    public function detail(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $contactRepository = $em->getRepository(Contact::class);
        $detailContact = $contactRepository->find($id);
        return $this->render('contact/detail.html.twig', ['detailContact' => $detailContact]);
    }

    /**
     * @Route("/contact-modification/{id}", name="contact-modification")
     */
    public function modifier(int $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $contactRepository = $em->getRepository(Contact::class);
        $modificationContact = $contactRepository->find($id);
        $form = $this->createForm(ContactType::class, $modificationContact);
        if($modificationContact === null){
            //Erreur 404
            throw new NotFoundHttpException("Le contact d'id ".$id." n'existe pas");
        }
        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($modificationContact);
                $em->flush();
                return $this->redirectToRoute("contact");
            }
        }
        return $this->render("contact/modification.html.twig", array('modificationContact' => $modificationContact, 'form' => $form->createView()));
    }

    /**
     * @Route("/contact-suppression/{id}", name="contact-suppression")
     */
    public function supprimer(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $contactRepository = $em->getRepository(Contact::class);
        $suppressionContact = $contactRepository->find($id);
        if($suppressionContact === null){
            throw new NotFoundHttpException("La cible d'id ".$id." n'existe pas");
        }
        foreach($suppressionContact->getMissions() as $mission){
            $suppressionContact->removeMission($mission);
        }
        $em->remove($suppressionContact);
        $em->flush();
        //return $this->redirectToRoute('contact');
    }

    /**
     * @Route("/contact-ajout", name="contact-ajout")
     */
    public function ajout(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                return $this->redirectToRoute("contact");
            }
        }
        return $this->render("contact/ajout.html.twig", array('contact' => $contact, 'form' => $form->createView()));
    }
}
