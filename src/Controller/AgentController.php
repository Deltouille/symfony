<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Agent;
use App\Entity\User;
use App\Form\AgentType;

class AgentController extends AbstractController
{
    /**
     * @Route("/agent", name="agent")
     */
    public function index()
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Agent
        $agentRepository = $em->getRepository(Agent::class);
        //On récupere tout les agents présent dans la base de données
        $listeAgent = $agentRepository->findAll();
        //On affiche tout les agents
        return $this->render('agent/index.html.twig', [
            'listeAgent'=>$listeAgent
        ]);
    }

    /**
     * @Route("/agent-ajout", name="agent-ajout")
     */
    public function ajout(Request $request)
    {
        //On empeche que les utilisateurs n'ayant pas le role admin ne puisse acceder a cette page
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        //On créer un nouvel agent
        $agent = new Agent();
        //On créer un nouveau formulaire qui utiliseras le FormType d'Agent
        $form = $this->createForm(AgentType::class, $agent);
        //On regarde si le formulaire a été envoyé avec une methode post
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            //On vérifie que le formulaire a bien été envoyé et qu'il est valide
            if($form->isSubmitted() && $form->isValid()){
                //On récupere l'entity manager
                $em = $this->getDoctrine()->getManager();
                //On enregistre le nouvel agent dans la base de données
                $em->persist($agent);
                $em->flush();
                //On redirige sur la page qui affiche tout les agents
                return $this->redirectToRoute('agent');
            }
        }
        //On affichhe la page du fomulaire
        return $this->render('agent/ajout.html.twig', ['agent' => $agent, 'form' => $form->createView()]);
    }

    /**
     * @Route("/agent-suppression/{id}", name="agent-suppression")
     */
    public function suppression(int $id, Request $request)
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Agent
        $agentRepository = $em->getRepository(Agent::class);
        //On récupere l'agent a supprimé avec l'identifiant dans l'url
        $suppressionAgent = $agentRepository->find($id);
        //On verifie que l'agent existe
        if($suppressionAgent === null){
            throw new NotFoundHttpException("L'agent d'id ".$id." n'existe pas");
        }
        //On enleve toutes les missions lié a l'agent dans l'association "mission_agent" (Obligé de faire comme ça sinon les missions lié a l'agent se supprimes et inversement)
        foreach($suppressionAgent->getMissions() as $mission){
            $suppressionAgent->removeMission($mission);
        }
        //On supprime l'agent de la base de données
        $em->remove($suppressionAgent);
        $em->flush();
        //On redirige sur la page qui affiche tout les agents
        //return $this->redirectToRoute('agent');
    }

    /**
     * @Route("/agent-details/{id}", name="agent-details")
     */
    public function detail(int $id)
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Agent
        $agentRepository = $em->getRepository(Agent::class);
        //on récupere le details de l'agent avec l'identifiant dans l'url
        $detailAgent = $agentRepository->find($id);
        //On verifie que l'agent existe
        if($detailAgent === null){
            throw new NotFoundHttpException("L'agent d'id ".$id." n'existe pas");
        }
        //On affiche la page du détails de l'agent 
        return $this->render('agent/detail.html.twig', ['detailAgent' => $detailAgent]);
    }

    /**
     * @Route("/agent-modification/{id}", name="agent-modification")
     */
    public function modifier(int $id, Request $request)
    {
        //On récupere l'entity manager
        $em = $this->getDoctrine()->getManager();
        //On récupere le repository de la classe Agent
        $agentRepository = $em->getRepository(Agent::class);
        //On récupere l'agent a modifier avec l'identifiant dans l'url
        $modificationAgent = $agentRepository->find($id);
        //On verifie que l'agent existe 
        if($modificationAgent === null){
            throw new NotFoundHttpException("L'agent d'id ".$id." n'existe pas");
        }
        //On créer un nouveau formulaire qui utiliseras le FormType d'Agent
        $form = $this->createForm(AgentType::class, $modificationAgent);
        //On regarde si le formulaire a été envoyé avec une methode post
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            //On vérifie que le formulaire a bien été envoyé et qu'il est valide
            if($form->isSubmitted() && $form->isValid()){
                //On enregistre la modification agent dans la base de données
                $em->persist($modificationAgent);
                $em->flush();
                //On redirige sur la page qui affiche le detail de l'agent
                return $this->redirectToRoute('agent-details', ['id' => $modificationAgent->getId()]);
            }
        }
        //On affichhe la page du fomulaire
        return $this->render('agent/modification.html.twig', array('form' => $form->createView(), 'modificationAgent' => $modificationAgent));
    }
}
