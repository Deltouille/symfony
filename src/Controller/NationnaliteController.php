<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Nationnalite;
use App\Form\NationnaliteType;

class NationnaliteController extends AbstractController
{
    /**
     * @Route("/nationnalite", name="nationnalite")
     */
    public function index(): Response
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $natioRepository = $em->getRepository(Nationnalite::class);
        $listeNatio = $natioRepository->findAll();
        return $this->render('nationnalite/index.html.twig', [
            'listeNatio'=>$listeNatio
        ]);
    }

    /**
     * @Route("/nationnalite-ajout", name="nationnalite-ajout")
     */
    public function ajout(Request $request): Response
    {
        $nationnalite = new Nationnalite();
        $form = $this->createForm(NationnaliteType::class, $nationnalite);

        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($nationnalite);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'nationnalite bien enregistrée.');
                return $this->redirectToRoute("nationnalite");
            }
        }
        return $this->render("nationnalite/ajout.html.twig", array('nationnalite' => $nationnalite, 'form' => $form->createView()));
    }

    /**
     * @Route("/nationnalite-suppression/{id}", name="nationnalite-suppression")
     */
    public function suppression(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $nationnaliteRepository = $em->getRepository(Nationnalite::class);
        $suppressionNatio = $nationnaliteRepository->find($id);
        $em->remove($suppressionNatio);
        $em->flush();

        return $this->redirectToRoute("nationnalite");

    }

    /**
     * @Route("/nationnalite-detail/{id}", name="nationnalite-detail")
     */
    public function details(int $id, Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $nationnaliteRepository = $em->getRepository(Nationnalite::class);
        $detailsNationnalite = $nationnaliteRepository->find($id);
        return $this->render('nationnalite/details.html.twig', ['detailsNationnalite' => $detailsNationnalite]);

    }
}
