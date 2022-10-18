<?php

namespace App\Controller;

use App\Repository\ActualitesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    /**
     * @Route("/actualites", name="app_actualites")
     * @param ActualitesRepository $actualitesRepository
     * @return Response
     */
    public function afficherPageActualites(ActualitesRepository $actualitesRepository): Response
    {
        return $this->render('actualites/actualites.html.twig', [
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Actualités',
            'actualites' => $actualitesRepository->findAll(),
        ]);
    }
}
