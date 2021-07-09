<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cible;
use App\Entity\Mission;
use App\Form\CibleType;

class CibleController extends AbstractController
{
    /**
     * @Route("/cible", name="cible")
     */
    public function index(): Response
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Cible
        $cibleRepository = $em->getRepository(Cible::class);
        //On récupere toutes les cibles présentent dans la base de données
        $listeCible = $cibleRepository->findAll();
        //On affiche toute les cibles
        return $this->render('cible/index.html.twig', [
            'listeCible'=>$listeCible
        ]);
    }

    /**
     * @Route("cible-ajout", name="cible-ajout")
     */
    public function ajout(Request $request): Response
    {
        //On créer une nouvelle cible
        $cible = new Cible();
        //On créer un nouveau formulaire qui utiliseras le FormType de Cible
        $form = $this->createForm(CibleType::class, $cible);
        //On regarde si le formulaire a été envoyé avec une methode post
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            //On vérifie que le formulaire a bien été envoyé et qu'il est valide
            if($form->isSubmitted() && $form->isValid()){
                //On récupere l'entity manager
                $em = $this->getDoctrine()->getManager();
                //On enregistre la nouvelle cible dans la base de données
                $em->persist($cible);
                $em->flush();
                //On redirige sur la page qui affiche tout les agents
                return $this->redirectToRoute('cible');
            }
        }
        //On affiche la page du fomulaire
        return $this->render('cible/ajout.html.twig', ['cible'=> $cible, 'form' => $form->createView()]);
    }

    /**
     * @Route("cible-suppression/{id}", name="cible-suppression")
     */
    public function suppression(int $id)
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Cible
        $cibleRepository = $em->getRepository(Cible::class);
        //On récupere la cible a supprimé avec l'identifiant dans l'url
        $suppressionCible = $cibleRepository->find($id);
        //On verifie que la cible existe
        if($suppressionCible === null){
            throw new NotFoundHttpException("La cible d'id ".$id." n'existe pas");
        }
        foreach($suppressionCible->getMissions() as $mission){
            $suppressionCible->removeMission($mission);
        }
        //On supprime l'agent de la base de données
        $em->remove($suppressionCible);
        $em->flush();
        //On redirige sur la page qui affiche toutes les cibles
        //return $this->redirectToRoute('cible');
    }

    /**
     * @Route("cible-details/{id}", name="cible-details")
     */
    public function detail(int $id): Response
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Cible
        $cibleRepository = $em->getRepository(Cible::class);
        $detailCible = $cibleRepository->find($id);        
        return $this->render('cible/detail.html.twig', ['detailCible' => $detailCible]);
    }

    /**
     * @Route("cible-modification/{id}", name="cible-modification")
     */
    public function modifier(int $id, Request $request): Response
    {
        $em = $thhis->getDoctrine()->getManager();
        $cibleRepository = $em->getRepository(Cible::class);
        $modificationCible = $cibleRepository->find($id);

        if($modificationCible === null){
            throw new NotFoundHttpException("La cible d'id ".$id." n'existe pas");
        }
        $form = $this->createForm(CibleType::class, $modificationCible);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em->persist($modificationCible);
                $em->flush();
                return $this->redirectToRoute('cible-details', ['id' => $modificationCible->getId()]);
            }
        }
        return $this->render('cible/modification.html.twig', array('form' => $form->createView(), 'modificationCible' => $modificationCible));
    }


}
