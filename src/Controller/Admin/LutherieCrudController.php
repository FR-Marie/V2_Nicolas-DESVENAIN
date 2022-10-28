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
            TextField::new('titreSite', 'Titre du site (*)'),
            TextField::new('titreIntroduction', 'Titre introduction (*)'),
            TextEditorField::new('introduction', 'Introduction (*)'),


            ImageField::new('imageDescription', 'Image description (*)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('imageGalerie', 'Image galerie (*)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),


            TextEditorField::new('description1', 'Description 1 (*)'),
            TextEditorField::new('description2', 'Description 2'),


            ImageField::new('galerie1', 'Img galerie 1 (*)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie2', 'Img galerie 2 (*)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie3', 'Img galerie 3 (*)')
                ->setBasePath('/img/site/lutherie')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie4', 'Img galerie 4')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie5', 'Img galerie 5')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie6', 'Img galerie 6')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie7', 'Img galerie 7')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie8', 'Img galerie 8')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie9', 'Img galerie 9')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie10', 'Img galerie 10')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie11', 'Img galerie 11')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie12', 'Img galerie 12')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie13', 'Img galerie 13')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie14', 'Img galerie 14')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('galerie15', 'Img galerie 15')
                ->setBasePath('/img')
                ->setUploadDir('public/img/site/lutherie')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),


        ];
    }

}
