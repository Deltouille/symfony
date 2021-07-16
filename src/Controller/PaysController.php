<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Pays;
use App\Form\PaysType;

class PaysController extends AbstractController
{
    /**
     * @Route("/pays", name="pays")
     */
    public function index()
    {
       //Affiche la liste des pays
       $em = $this->getDoctrine()->getManager();
       $paysRepository = $em->getRepository(Pays::class);
       $listePays = $paysRepository->findAll();
       return $this->render('pays/index.html.twig', [
           'listePays'=>$listePays
       ]);
    }

    /**
     * @Route("/pays-ajout", name="pays-ajout")
     */
    public function ajout(Request $request)
    {
        $pays = new Pays();
        $form = $this->createForm(PaysType::class, $pays);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($pays);
                $em->flush();
                return $this->redirectToRoute("pays");
            }
        }
        return $this->render("pays/ajout.html.twig", array('pays' => $pays, 'form' => $form->createView()));
    }

    /**
     * @Route("/pays-suppression/{id}", name="pays-suppression")
     */
    public function supprimer(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $paysRepository = $em->getRepository(Pays::class);
        $suppressionPays = $paysRepository->find($id);
        if($suppressionPays === null){
            //Erreur 404
            throw new NotFoundHttpException("Le pays d'id ".$id." n'existe pas");
        }
        foreach($suppressionPays->getMissions() as $mission){
            $suppressionPays->removeMission($mission);
        }
        foreach($suppressionPays->getPlanques() as $planque){
            $suppressionPays->removePlanque($planque);
        }
        $em->remove($suppressionPays);
        $em->flush();
        //return $this->redirectToRoute('pays');
    }

    /**
     * @Route("/pays-modification/{id}", name="pays-modification")
     */
    public function modification(int $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $paysRepository = $em->getRepository(Pays::class);
        $modificationPays = $paysRepository->find($id);
        $form = $this->createForm(PaysType::class, $modificationPays);
        if($modificationPays === null){
            throw new NotFoundHttpException("Le pays d'id ".$id." n'existe pas");
        }
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($modificationPays);
                $em->flush();
                return $this->redirectToRoute("pays");
            }
        }
        return $this->render("pays/modification.html.twig", array('modificationPays' => $modificationPays, 'form' => $form->createView()));
    }
}
