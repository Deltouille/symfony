<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RedirectController extends AbstractController
{
    /**
     * @Route("/", name="redirect")
     */
    public function index(): Response
    {
        //Sert a être redirigé a la page /mission si l'utilisateur ne met que symfony.localhost dans l'url
        return $this->redirectToRoute("mission");
    }
}
