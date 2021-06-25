<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Nationnalite;
use App\Form\NationnaliteType;

class NationnaliteController extends AbstractController
{
    /**
     * @Route("/nationnalite", name="nationnalite")
     */
    public function index(): Response
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $natioRepository = $em->getRepository(Nationnalite::class);
        $listeNatio = $natioRepository->findAll();
        return $this->render('nationnalite/index.html.twig', [
            'listeNatio'=>$listeNatio
        ]);
    }

    /**
     * @Route("/nationnalite-ajout", name="nationnalite-ajout")
     */
    public function ajout(Request $request): Response
    {
        $nationnalite = new Nationnalite();
        $form = $this->createForm(NationnaliteType::class, $nationnalite);

        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($nationnalite);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'nationnalite bien enregistrée.');
                return $this->redirectToRoute("nationnalite");
            }
        }
        return $this->render("nationnalite/ajout.html.twig", array('nationnalite' => $nationnalite, 'form' => $form->createView()));
    }

    /**
     * @Route("/nationnalite-suppression/{id}", name="nationnalite-suppression")
     */
    public function suppression(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $nationnaliteRepository = $em->getRepository(Nationnalite::class);
        $suppressionNatio = $nationnaliteRepository->find($id);
        //On supprime les agents dans la relation
        foreach($suppressionNatio->getAgents() as $agent){
            $suppressionNatio->removeAgent($agent);
        }
        //On supprime les agents dans la relation
        foreach($suppressionNatio->getCibles() as $cible){
            $suppressionNatio->removeCible($cible);
        }
        //On supprime les contacts dans la relation
        foreach($suppressionNatio->getContacts() as $contact){
            $suppressionNatio->removeContact($contact);
        }
        $em->remove($suppressionNatio);
        $em->flush();

        return $this->redirectToRoute("nationnalite");

    }

    /**
     * @Route("/nationnalite-detail/{id}", name="nationnalite-detail")
     */
    public function details(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $nationnaliteRepository = $em->getRepository(Nationnalite::class);
        $detailsNationnalite = $nationnaliteRepository->find($id);
        return $this->render('nationnalite/details.html.twig', ['detailsNationnalite' => $detailsNationnalite]);

    }

    /**
     * @Route("/nationnalite-modification/{id}", name="nationnalite-modification")
     */
    public function modification(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $nationnaliteRepository = $em->getRepository(Nationnalite::class);
        $modificationNationnalite = $nationnaliteRepository->find($id);
        $form = $this->createForm(NationnaliteType::class, $modificationNationnalite);
        if($modificationNationnalite === null){
            throw new NotFoundHttpException("La nationnalité d'id ".$id." n'existe pas");
        }
        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $em->persist($modificationNationnalite);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'nationnalité bien modifiée');
                return $this->redirectToRoute('nationnalite-details', ['id' => $modificationNationnalite->getId()]);
            }
        }
        return $this->render('nationnalite/modification.html.twig', ['form' => $form->createView(), 'modificationNationnalite' => $modificationNationnalite]);
    }
}
