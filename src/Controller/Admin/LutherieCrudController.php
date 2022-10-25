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
            TextField::new('titreSite', 'Titre du site'),
            TextField::new('titreIntroduction', 'Titre de l\'introduction'),
            TextEditorField::new('introduction', 'Introduction'),
            ImageField::new('imageDescription')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('imageGalerie')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            TextEditorField::new('description1', 'Description 1'),
            TextEditorField::new('description2', 'Description 2'),
            ImageField::new('galerie1')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie2')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie3')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie4')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie5')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie6')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie7')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie8')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie9')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie10')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie11')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie12')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie13')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie14')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),
            ImageField::new('galerie15')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true),

        ];
    }

}
