<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MissionType;
use App\Entity\Mission;
use App\Entity\Agent;
use App\Entity\Cible;
use App\Entity\Planque;
use App\Entity\Contact;
use App\Entity\Pays;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class MissionController extends AbstractController
{
    /**
     * @Route("/mission", name="mission")
     */
    public function index()
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $missionRepository = $em->getRepository(Mission::class);
        $listeMissions = $missionRepository->findAll();
        return $this->render('mission/index.html.twig', [
            'listeMissions'=>$listeMissions
        ]);
    }

    /**
     * @Route("/mission-details/{id}", name="mission-details")
     */
    public function detail(int $id)
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $missionRepository = $em->getRepository(Mission::class);
        $detailMission = $missionRepository->find($id);

        return $this->render('mission/detail.html.twig', [
            'detailMission'=>$detailMission
        ]);
        
    }

    /**
     * @Route("/mission-modification/{id}", name="mission-modification")
     * 
     */
    public function modification(int $id, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        //On récupere l'entityManager
        $em = $this->getDoctrine()->getManager();
        $missionRepository = $em->getRepository(Mission::class);
        $modificationMission = $missionRepository->find($id);

        //On vérifie que la mission existe
        if($modificationMission === null){
            //Erreur 404
            throw new NotFoundHttpException("La mission d'id ".$id." n'existe pas");
        }

        //On génére le formulaire depuis le formbuilder
        $form = $this->createForm(MissionType::class, $modificationMission);
        //Si la requete est une requete POST
        if($request->isMethod('POST')){
            // On fait le lien Requête <-> Formulaire
            // Donc à partir de maintenant,
            // la variable $modificationMission contient les valeurs modifiées entrées dans le formulaire par l'utilisateur
            $form->handleRequest($request);

            //On vérifie que les valeurs entrées sont correctes
            if($form->isSubmitted() && $form->isValid()){
                //On modifie les données dans doctrine
                $em->persist($modificationMission);
                //On envoie dans la base de données
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Mission bien modifiée');
                //On retourne sur le détail de la mission modifiée
                return $this->redirectToRoute('mission-details', ['id' => $modificationMission->getId()]);
            }
        }
        //On affiche la page de modification
        return $this->render('mission/modification.html.twig', array('form' => $form->createView(), 'modificationMission' => $modificationMission));
    }

    /**
     * @Route("/mission-suppression/{id}", name="mission-suppression")
     */
    public function suppression(int $id, Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $em = $this->getDoctrine()->getManager();
        $missionRepository = $em->getRepository(Mission::class);
        $suppressionMission = $missionRepository->find($id);
        //On vérifie que la mission existe
        if($suppressionMission === null){
            //Erreur 404
            throw new NotFoundHttpException("La mission d'id ".$id." n'existe pas");
        }
        //On supprime les agents dans la relation
        foreach($suppressionMission->getAgent() as $agent){
            $suppressionMission->removeAgent($agent);
        }
        //On supprime les agents dans la relation
        foreach($suppressionMission->getCible() as $cible){
            $suppressionMission->removeCible($cible);
        }
        //On supprime les agents dans la relation
        foreach($suppressionMission->getPlanque() as $planque){
                $suppressionMission->removePlanque($planque);
        }
        //On supprime les contacts dans la relation
        foreach($suppressionMission->getContact() as $contact){
            $suppressionMission->removeContact($contact);
        }
        $em->remove($suppressionMission);
        $em->flush();
      
        //return $this->redirectToRoute("mission");
            
    }

    /**
     * @Route("mission-ajout", name="mission-ajout")
     */
    public function ajout(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $mission = new Mission();
        $form = $this->createForm(MissionType::class, $mission);

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($mission);
                $em->flush();
                return $this->redirectToRoute("mission");
            }
        }
        return $this->render("mission/ajout.html.twig", array('mission' => $mission, 'form' => $form->createView()));
    }
}

