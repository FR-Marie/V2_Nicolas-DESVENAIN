<?php

namespace App\Controller\Admin;

use App\Entity\Lutherie;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class LutherieCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lutherie::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id','ID')->onlyOnIndex(),
            TextField::new('titreSite', 'Titre du site (obligatoire)'),
            TextField::new('titreIntroduction', 'Titre de l\'introduction (obligatoire)'),
            TextEditorField::new('introduction', 'Introduction (obligatoire)'),


            ImageField::new('imageDescription', 'Image tableau gauche (description - obligatoire)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('imageGalerie', 'Image tableau droit (galerie - obligatoire)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),


            TextEditorField::new('description1', 'Description 1 (obligatoire)'),
            TextEditorField::new('description2', 'Description 2'),


            ImageField::new('galerie1', 'Image galerie (obligatoire)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie2', 'Image galerie (obligatoire)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie3', 'Image galerie (obligatoire)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie4', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie5', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie6', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie7', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie8', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie9', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie10', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie11', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie12', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie13', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie14', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie15', 'Image galerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),


        ];
    }

}
