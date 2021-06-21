<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Planque;
use App\Form\PlanqueType;

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

    /**
     * @Route("/planque-details/{id}", name="planque-details")
     */
    public function detail(int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $detailPlanque = $planqueRepository->find($id);

        return $this->render('planque/detail.html.twig', ['detailPlanque' => $detailPlanque]);
    }

    /**
     * @Route("planque-suppression/{id}", name="planque-suppression")
     */
    public function suppression(int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $planqueRepository = $em->getRepository(Planque::class);
        $suppressionPlanque = $planqueRepository->find($id);
        $em->remove($suppressionPlanque);
        $em->flush();
        return $this->redirectToRoute('planque');

    }

    /**
     * @Route("planque-ajout", name="planque-ajout")
     */
    public function ajout(Request $request): Response
    {
        $planque = new Planque();
        $form = $this->createForm(PlanqueType::class, $planque);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid() && $form->isSubmitted()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($planque);
                $em->flush();
                return $this->redirectToRoute('planque');
            }
        }
        return $this->render('planque/ajout.html.twig', ['planque' => $planque, 'form' => $form->createView()]);
    }
}
