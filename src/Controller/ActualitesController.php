<?php

namespace App\Controller;

use App\Repository\ActualitesRepository;
use App\Repository\ProjetsEnCoursRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualitesController extends AbstractController
{
    /**
     * @Route("/actualites", name="app_actualites")
     * @param ActualitesRepository $actualitesRepository
     * @param PaginatorInterface $paginator
     * @param ProjetsEnCoursRepository $projetsEnCoursRepository
     * @param Request $request
     * @return Response
     */
    public function afficherPageActualites(ActualitesRepository $actualitesRepository, PaginatorInterface $paginator,
                                            ProjetsEnCoursRepository $projetsEnCoursRepository, Request $request): Response
    {

        $paginationActualites = $paginator->paginate(
            $actualitesRepository->findAll(),
            $request->query->getInt('page1', 1),3,
            [
                'pageParameterName' => 'page1',
                'sortFieldParameterName' => 'sort1',
                'sortDirectionParameterName' => 'direction1'
            ]
        );

        return $this->render('actualites/actualites.html.twig', [
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Actualités',
            'actualites' => $paginationActualites,
            'projetEnCours' => $projetsEnCoursRepository->findAll(),
        ]);
    }
}
