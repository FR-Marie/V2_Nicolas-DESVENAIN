<?php

namespace App\Controller;

use App\Repository\EpoquesRepository;
use App\Repository\InstrumentsRepository;
use App\Repository\RealisationsRepository;
use App\Repository\VideosRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RealisationsController extends AbstractController
{
    /**
     * @Route("/realisations", name="app_realisations")
     * @param RealisationsRepository $realisationsRepository
     * @param PaginatorInterface $paginator
     * @param VideosRepository $videosRepository
     * @param InstrumentsRepository $instrumentsRepository
     * @param EpoquesRepository $epoquesRepository
     * @param Request $request
     * @return Response
     */
    public function afficherPageRealisations(RealisationsRepository $realisationsRepository, PaginatorInterface  $paginator,
                                             VideosRepository $videosRepository, InstrumentsRepository $instrumentsRepository,
                                             EpoquesRepository $epoquesRepository, Request $request): Response
    {
        $paginationRealisations = $paginator->paginate(
            $realisationsRepository->findAll(),
            $request->query->getInt('page1', 1),3,
            [
                'pageParameterName' => 'page1',
                'sortFieldParameterName' => 'sort1',
                'sortDirectionParameterName' => 'direction1'
            ]
        );

        $paginationVideos = $paginator->paginate(
            $videosRepository->findAll(),
            $request->query->getInt('page2',1),6,
            [
                'pageParameterName' => 'page2',
                'sortFieldParameterName' => 'sort2',
                'sortDirectionParameterName' => 'direction2'
            ]
        );

        return $this->render('realisations/realisations.html.twig', [
            'controller_name' => 'RealisationsController',
            'titreSite' => 'Lutherie d\'Oc',
            'titrePage' => 'Réalisations',
            'realisations' => $paginationRealisations,
            'videos' =>$paginationVideos,
            'instruments' => $instrumentsRepository->findAll(),
            'epoques' => $epoquesRepository->findAll(),
        ]);
    }
}
