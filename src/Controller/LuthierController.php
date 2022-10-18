<?php

namespace App\Controller;

use App\Repository\LutherieRepository;
use App\Repository\LuthierRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuthierController extends AbstractController
{
    /**
     * @Route("/luthier", name="app_luthier")
     * @param LuthierRepository $luthierRepository
     * @return Response
     */
    public function afficherPageLuthier(LuthierRepository $luthierRepository): Response
    {
        return $this->render('luthier/luthier.html.twig', [
            'controller_name' => 'LuthierController',
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Nicolas DESVENAIN',
            'presentation' => $luthierRepository->findAll(),
        ]);
    }
}
