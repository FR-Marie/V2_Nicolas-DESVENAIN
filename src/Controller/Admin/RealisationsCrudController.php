<?php

namespace App\Controller\Admin;

use App\Entity\Realisations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class RealisationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Realisations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id','ID')->onlyOnIndex(),
            AssociationField::new('instrument', 'Instrument'),
            AssociationField::new('epoque', 'Epoque'),
            TextField::new('titrePage', 'Titre de la page (obligatoire)'),
            TextField::new('titreRealisation', 'Titre de la réalisation (obligatoire)'),

            ImageField::new('imageRealisation', 'Image réalisation (obligatoire)')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            TextField::new('resumeRealisation', 'Résumé de la réalisation (obligatoire)'),
            TextEditorField::new('descriptionRealisation1', 'Description -part 1- (obligatoire)'),
            TextEditorField::new('descriptionRealisation2', 'Description -part 2- (obligatoire)'),

            ImageField::new('annexeRealisation1', 'Annexe 1 (obligatoire)')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('annexeRealisation2', 'Annexe 2 (obligatoire)')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('annexeRealisation3', 'Annexe 3 (obligatoire)')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('annexeRealisation4', 'Annexe 4')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('annexeRealisation5', 'Annexe 5')
                ->setBasePath('/img/site/realisations')
                ->setUploadDir('public/img/site/realisations')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),
        ];
    }

}
