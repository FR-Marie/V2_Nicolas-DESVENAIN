<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                    'pattern' => "[a-zA-Zéèëàäïì-]",
                    'message' => 'Merci de n\'entrer que des lettres'
                ])
            ]])
            ->add('prenom',TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                    'pattern' => "[a-zA-Zéèëàäïì-]",
                    'message' => 'Merci de n\'entrer que des lettres'
                ])
            ]])
            ->add('email',EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                    'pattern' => "[a-zA-Z0-9éèëàäïì@.-_]",
                    'message' => 'Merci d\'entrer un mail valide'
                ])
            ]])
            ->add('message', TextareaType::class, [
                'attr' => ['rows' => 10],
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                    'pattern' => "[a-zA-Z0-9éèëàäïì@.-_]",
                    'message' => 'Merci de n\'entrer que des lettres et des chiffres de 0 à 9'
                ])
            ]]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
