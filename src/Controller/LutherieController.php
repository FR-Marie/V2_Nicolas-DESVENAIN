<?php

namespace App\Controller;

use App\Repository\LutherieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LutherieController extends AbstractController
{
    /**
     * @Route("/", name="app_lutherie")
     * @param LutherieRepository $lutherieRepository
     * @return Response
     */
    public function afficherPageLutherie(LutherieRepository $lutherieRepository): Response
    {
        return $this->render('lutherie/lutherie.html.twig', [
            'controller_name' => 'LutherieController',
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'La lutherie',
            'lutherieContent' => $lutherieRepository->findAll(),
        ]);
    }
}


