<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Agent;
use App\Form\AgentType;

class AgentController extends AbstractController
{
    /**
     * @Route("/agent", name="agent")
     */
    public function index(): Response
    {
        //Affiche la liste des agents
        $em = $this->getDoctrine()->getManager();
        $agentRepository = $em->getRepository(Agent::class);
        $listeAgent = $agentRepository->findAll();
        return $this->render('agent/index.html.twig', [
            'listeAgent'=>$listeAgent
        ]);
    }

    /**
     * @Route("/agent-ajout", name="agent-ajout")
     */
    public function ajout(Request $request): Response
    {
        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($agent);
                $em->flush();
                return $this->redirectToRoute('agent-ajout');
            }
        }
        return $this->render('agent/ajout.html.twig', ['agent' => $agent, 'form' => $form->createView()]);
    }

    /**
     * @Route("/agent-suppression/{id}", name="agent-suppression")
     */
    public function suppression(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $agentRepository = $em->getRepository(Agent::class);
        $suppressionAgent = $agentRepository->find($id);
        //On supprime les agents dans la relation
        foreach($suppressionAgent->getMissions() as $mission){
            $suppressionAgent->removeMission($mission);
        }
        $em->remove($suppressionAgent);
        $em->flush();
        return $this->redirectToRoute('agent');
    }

    /**
     * @Route("/agent-details/{id}", name="agent-details")
     */
    public function detail(int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $agentRepository = $em->getRepository(Agent::class);
        $detailAgent = $agentRepository->find($id);

        return $this->render('agent/detail.html.twig', ['detailAgent' => $detailAgent]);
    }
}
