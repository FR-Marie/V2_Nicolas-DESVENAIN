<?php

namespace App\Controller\Admin;

use App\Entity\Actualites;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ActualitesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Actualites::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id','ID')->onlyOnIndex(),
            DateTimeField::new('dateActualite', 'Date de publication'),
            TextField::new('titreActualite', 'Titre de l\'actualité'),
            TextField::new('resumeActualite', 'Résumé de l\'actualité'),
            TextField::new('LienActualite', 'Lien de l\'actualité'),
        ];
    }

}
