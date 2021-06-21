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
        //Affiche la liste des cibles
        $em = $this->getDoctrine()->getManager();
        $cibleRepository = $em->getRepository(Cible::class);
        $listeCible = $cibleRepository->findAll();
        return $this->render('cible/index.html.twig', [
            'listeCible'=>$listeCible
        ]);
    }

    /**
     * @Route("cible-ajout", name="cible-ajout")
     */
    public function ajout(Request $request): Response
    {
        $cible = new Cible();
        $form = $this->createForm(CibleType::class, $cible);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid() && $form->isSubmitted()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($cible);
                $em->flush();
                return $this->redirectToRoute('cible');
            }
        }
        return $this->render('cible/ajout.html.twig', ['cible'=> $cible, 'form' => $form->createView()]);
    }

    /**
     * @Route("cible-suppression/{id}", name="cible-suppression")
     */
    public function suppression(int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $cibleRepository = $em->getRepository(Cible::class);
        $suppressionCible = $cibleRepository->find($id);
        $em->remove($suppressionCible);
        $em->flush();
        return $this->redirectToRoute('cible');
    }

    /**
     * @Route("cible-details/{id}", name="cible-details")
     */
    public function detail(int $id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $cibleRepository = $em->getRepository(Cible::class);
        $missionRepository = $em->getRepository(Mission::class);
        $detailCible = $cibleRepository->find($id);
        $mission = $detailCible->getMission();
        if($detailCible->getMission() == null)
        {
            $detailMission = 'null';
        } else {
            $detailMission = $missionRepository->find($mission->getId());
        }
        
        return $this->render('cible/detail.html.twig', ['detailCible' => $detailCible, 'detailMission' => $detailMission]);
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
            if($form->isValid() && $form->isSubmitted()){
                $em->persist($modificationCible);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Agent bien modifiée');
                return $this->redirectToRoute('cible-details', ['id' => $modificationCible->getId()]);
            }
        }
        return $this->render('cible/modification.html.twig', array('form' => $form->createView(), 'modificationCible' => $modificationCible));
    }


}
