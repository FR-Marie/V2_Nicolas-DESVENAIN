<?php

namespace App\Controller\Admin;

use App\Entity\Luthier;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class LuthierCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Luthier::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IntegerField::new('id','ID')->onlyOnIndex(),
            TextField::new('titrePage', 'Titre de la page'),

            ImageField::new('imageSlide1')
                ->setBasePath('/img/site/luthier')
                ->setUploadDir('public/img/site/luthier')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('imageSlide2')
                ->setBasePath('/img/site/luthier')
                ->setUploadDir('public/img/site/luthier')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('imageSlide3')
                ->setBasePath('/img/site/luthier')
                ->setUploadDir('public/img/site/luthier')
                ->setFormType(FileUploadType::class)
                ->setRequired(true)
                ->setFormTypeOption('allow_delete', true),

            ImageField::new('imageSlide4')
                ->setBasePath('/img/site/luthier')
                ->setUploadDir('public/img/site/luthier')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),


            ImageField::new('imageSlide5')
                ->setBasePath('/img/site/luthier')
                ->setUploadDir('public/img/site/luthier')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOption('allow_delete', true),

            TextField::new('titreIntroduction', 'Titre de l\'introduction'),
            TextEditorField::new('introduction', 'Introduction'),

            TextField::new('titreTexte1', 'Titre du texte 1'),
            TextEditorField::new('texte1', 'Texte 1'),

            TextField::new('titreTexte2', 'Titre du texte 2'),
            TextEditorField::new('texte2', 'Texte 2'),

            TextField::new('titreTexte3', 'Titre du texte 3'),
            TextEditorField::new('texte3', 'Texte 3'),
 
        ];
    }

}
