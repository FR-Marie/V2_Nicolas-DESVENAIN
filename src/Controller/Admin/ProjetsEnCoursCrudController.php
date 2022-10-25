<?php

namespace App\Controller\Admin;

use App\Entity\ProjetsEnCours;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProjetsEnCoursCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProjetsEnCours::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
