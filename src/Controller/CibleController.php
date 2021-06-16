<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Cible;

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
}
