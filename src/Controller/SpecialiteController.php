<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Specialite;
use App\Form\SpecialiteType;

class SpecialiteController extends AbstractController
{
    /**
     * @Route("/specialite", name="specialite")
     */
    public function index()
    {
       //Affiche la liste des specialite
       $em = $this->getDoctrine()->getManager();
       $specialiteRepository = $em->getRepository(Specialite::class);
       $listeSpecialite = $specialiteRepository->findAll();
       return $this->render('specialite/index.html.twig', [
           'listeSpecialite'=>$listeSpecialite
       ]);
    }

    /**
     * @Route("/specialite-ajout", name="specialite-ajout")
     */
    public function ajout(Request $request)
    {
        $specialite = new specialite();
        $form = $this->createForm(specialiteType::class, $specialite);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($specialite);
                $em->flush();
                return $this->redirectToRoute("specialite");
            }
        }
        return $this->render("specialite/ajout.html.twig", array('specialite' => $specialite, 'form' => $form->createView()));
    }

    /**
     * @Route("/specialite-suppression/{id}", name="specialite-suppression")
     */
    public function supprimer(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $specialiteRepository = $em->getRepository(specialite::class);
        $suppressionSpecialite = $specialiteRepository->find($id);
        if($suppressionSpecialite === null){
            //Erreur 404
            throw new NotFoundHttpException("Le specialite d'id ".$id." n'existe pas");
        }
        foreach($suppressionSpecialite->getMission() as $mission){
            $suppressionSpecialite->removeMission($mission);
        }
        foreach($suppressionSpecialite->getAgent() as $agent){
            $suppressionSpecialite->removeAgent($agent);
        }
        $em->remove($suppressionSpecialite);
        $em->flush();
        //return $this->redirectToRoute('specialite');
    }

    /**
     * @Route("/specialite-modification/{id}", name="specialite-modification")
     */
    public function modification(int $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $specialiteRepository = $em->getRepository(specialite::class);
        $modificationSpecialite = $specialiteRepository->find($id);
        $form = $this->createForm(specialiteType::class, $modificationSpecialite);
        if($modificationSpecialite === null){
            throw new NotFoundHttpException("Le specialite d'id ".$id." n'existe pas");
        }
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($modificationSpecialite);
                $em->flush();
                return $this->redirectToRoute("specialite");
            }
        }
        return $this->render("specialite/modification.html.twig", array('modificationSpecialite' => $modificationSpecialite, 'form' => $form->createView()));
    }

    /**
     * @Route("specialite-details/{id}", name="specialite-details")
     */
    public function details(int $id)
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Specialite
        $specialiteRepository = $em->getRepository(Specialite::class);
        //on récupere le details de l'agent avec l'identifiant dans l'url
        $detailSpecialite = $specialiteRepository->find($id);
        //On verifie que l'agent existe
        if($detailSpecialite === null){
            throw new NotFoundHttpException("La specialite d'id ".$id." n'existe pas");
        }
        //On affiche la page du détails de l'agent 
        return $this->render('specialite/detail.html.twig', ['detailSpecialite' => $detailSpecialite]);

    }
}
