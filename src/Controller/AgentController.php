<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Agent;
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
}
