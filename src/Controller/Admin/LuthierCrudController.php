<?php

namespace App\Controller\Admin;

use App\Entity\Luthier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LuthierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Luthier::class;
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
