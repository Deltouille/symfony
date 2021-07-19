<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planque;
use App\Entity\Pays;
use App\Form\PlanqueType;

class PlanqueController extends AbstractController
{
    /**
     * @Route("/planque", name="planque")
     */
    public function index()
    {
        //affiche la liste des planques
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $listePlanque = $planqueRepository->findAll();
        return $this->render('planque/index.html.twig', [
            'listePlanque'=>$listePlanque
        ]);
    }

    /**
     * @Route("/planque-details/{id}", name="planque-details")
     */
    public function detail(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $detailPlanque = $planqueRepository->find($id);

        return $this->render('planque/detail.html.twig', ['detailPlanque' => $detailPlanque]);
    }

    /**
     * @Route("planque-suppression/{id}", name="planque-suppression")
     */
    public function suppression(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $suppressionPlanque = $planqueRepository->find($id);
        if($suppressionPlanque == null){
            return new Response("La planque d'id ".$id." n'existe pas");
        }
        foreach($suppressionPlanque->getMissions() as $mission){
            $suppressionPlanque->removeMission($mission);
        }
        $em->remove($suppressionPlanque);
        $em->flush();
        //return $this->redirectToRoute('planque');

    }

    /**
     * @Route("planque-ajout", name="planque-ajout")
     */
    public function ajout(Request $request)
    {
        $planque = new Planque();
        $form = $this->createForm(PlanqueType::class, $planque);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($planque);
                $em->flush();
                return $this->redirectToRoute('planque');
            }
        }
        return $this->render('planque/ajout.html.twig', ['planque' => $planque, 'form' => $form->createView()]);
    }

    /**
     * @Route("/planque-modification/{id}", name="planque-modification")
     */
    public function modifier(int $id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $modificationPlanque = $planqueRepository->find($id);
        $form = $this->createForm(PlanqueType::class, $modificationPlanque);
        if($modificationPlanque === null){
            return new Response("La planque d'id ".$id." n'existe pas");
        }
        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $em->persist($modificationPlanque);
                $em->flush();
                return $this->redirectToRoute('planque-details', ['id' => $modificationPlanque->getId()]);
            }
        }
        return $this->render('planque/modification.html.twig', array('form' => $form->createView(), 'modificationPlanque' => $modificationPlanque));
    }
}
