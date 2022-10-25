<?php

namespace App\Controller\Admin;

use App\Entity\Epoques;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class EpoquesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Epoques::class;
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
