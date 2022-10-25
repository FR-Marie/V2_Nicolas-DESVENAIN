<?php

namespace App\Controller\Admin;

use App\Entity\Actualites;
use App\Entity\Agenda;
use App\Entity\Lutherie;
use App\Entity\Luthier;
use App\Entity\ProjetsEnCours;
use App\Entity\Realisations;
use App\Entity\User;
use App\Entity\Videos;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(LutherieCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('ADMINISTRATION <br> Lutherie d\'Oc');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);

        return [
            MenuItem::linkToDashboard('Dashboard Accueil', 'fa fa-home'),

            MenuItem::section('LUTHERIE (accueil)'),
            MenuItem::linkToCrud('Lutherie', 'fa fa-user', Lutherie::class),

            MenuItem::section('LUTHIER (présentation)'),
            MenuItem::linkToCrud('Luthier', 'fa fa-user', Luthier::class),

            MenuItem::section('REALISATIONS'),
            MenuItem::linkToCrud('Réalisations', 'fa fa-user', Realisations::class),
            MenuItem::linkToCrud('Vidéos', 'fa fa-user', Videos::class),

            MenuItem::section('ACTUALITES'),
            MenuItem::linkToCrud('Articles de presse & autres', 'fa fa-user', Actualites::class),
            MenuItem::linkToCrud('Projet en cours', 'fa fa-user', ProjetsEnCours::class),

            MenuItem::section('UTILISATEURS'),
            MenuItem::linkToCrud('Administrateurs', 'fa fa-user', User::class),

            MenuItem::section('RETOUR AU SITE '),
            MenuItem::linkToRoute('', 'fa fa-door-open', 'app_lutherie'),
        ];


    }
}
