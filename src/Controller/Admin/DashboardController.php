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
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
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
        $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);

        return $this->redirect($adminUrlGenerator->setController(LutherieCrudController::class));
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('<h4 class="bg-light p-3 text-center">ADMINISTRATION <br> Lutherie d\'Oc</h4>');
    }

    public function configureMenuItems(): iterable
    {
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);

        return [

            MenuItem::section('<h5 class="bg-warning p-2 text-white">LUTHERIE (accueil)</h5>'),
            MenuItem::linkToCrud('Lutherie', 'fa fa-play', Lutherie::class),

            MenuItem::section('<h5 class="bg-warning p-2 text-white">LUTHIER (présentation)</h5>'),
            MenuItem::linkToCrud('Luthier', 'fa fa-play', Luthier::class),

            MenuItem::section('<h5 class="bg-warning p-2 text-white">REALISATIONS</h5>'),
            MenuItem::linkToCrud('Réalisations', 'fa fa-play', Realisations::class),
            MenuItem::linkToCrud('Vidéos', 'fa fa-play', Videos::class),

            MenuItem::section('<h5 class="bg-warning p-2 text-white">ACTUALITES</h5>'),
            MenuItem::linkToCrud('Articles de presse & autres', 'fa fa-play', Actualites::class),
            MenuItem::linkToCrud('Projet en cours', 'fa fa-play', ProjetsEnCours::class),

            MenuItem::section('<h5 class="bg-warning p-2 text-white">UTILISATEURS</h5>'),
            MenuItem::linkToCrud('Administrateurs', 'fa fa-user', User::class),

            MenuItem::section('<h5 class="bg-warning p-2 text-white">RETOUR AU SITE / DECONNEXION</h5> '),
            MenuItem::linkToRoute('Retour au site', 'fa fa-door-open', 'app_lutherie'),
            MenuItem::linkToLogout('Déconnexion', 'fa fa-power-off'),


        ];

    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
    }


}
