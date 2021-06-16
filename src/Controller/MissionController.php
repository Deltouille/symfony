<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Mission;

class MissionController extends AbstractController
{
    /**
     * @Route("/mission", name="mission")
     */
    public function index(): Response
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
    public function detail(int $id): Response
    {
        //Affiche la liste des missions
        $em = $this->getDoctrine()->getManager();
        $missionRepository = $em->getRepository(Mission::class);
        $detailMission = $missionRepository->find($id);
        //dd($detailMission);
        return $this->render('mission/detail.html.twig', [
            'detailMission'=>$detailMission
        ]);
    }
}

