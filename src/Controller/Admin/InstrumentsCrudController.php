<?php

namespace App\Controller\Admin;

use App\Entity\Instruments;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InstrumentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Instruments::class;
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
