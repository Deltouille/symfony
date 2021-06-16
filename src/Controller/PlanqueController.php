<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planque;

class PlanqueController extends AbstractController
{
    /**
     * @Route("/planque", name="planque")
     */
    public function index(): Response
    {
        //affiche la liste des planques
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $listePlanque = $planqueRepository->findAll();
        return $this->render('planque/index.html.twig', [
            'listePlanque'=>$listePlanque
        ]);
    }
}
