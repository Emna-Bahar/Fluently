<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Langue;
use App\Entity\Niveau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // 1. Choix de la langue (non mappé)
            ->add('langue', EntityType::class , [
            'class' => Langue::class ,
            'choice_label' => 'nom',
            'placeholder' => 'Choisir une langue',
            'mapped' => false,
            'required' => true,
            'label' => 'Langue',
            'attr' => ['class' => 'form-select form-select-lg'],
        ])

            // 2. Choix du niveau (mappé, mais on le remplit dynamiquement via JS ou via query)
            ->add('Id_niveau', EntityType::class , [
            'class' => Niveau::class ,
            'choice_label' => function (Niveau $niveau) {
            return 'Niveau ' . $niveau->getOrdre() . ' - ' . $niveau->getDifficulte();
        },
            'choice_attr' => function (Niveau $niveau) {
            return ['data-langue' => $niveau->getIdLangue()->getId()];
        },
            'placeholder' => 'Choisir un niveau',
            'label' => 'Niveau',
            'required' => true,
            'attr' => ['class' => 'form-select form-select-lg', 'id' => 'niveau-select'],
        ])

            ->add('numero', null, [
            'label' => 'Numéro du cours',
            'attr' => ['class' => 'form-control form-control-lg'],
        ])

            ->add('cours_precedent_id', EntityType::class , [
            'class' => Cours::class ,
            'choice_label' => 'numero',
            'label' => 'Cours précédent (optionnel)',
            'required' => false,
            'placeholder' => 'Aucun',
            'attr' => ['class' => 'form-select form-select-lg'],
        ])

            ->add('ressourcesFiles', \Symfony\Component\Form\Extension\Core\Type\CollectionType::class , [
            'entry_type' => FileType::class ,
            'entry_options' => [
                'label' => false,
                'attr' => [
                    'accept' => '.pdf,.mp4,.webm,.jpg,.jpeg,.png,.gif,.webp,.mp3,.wav,.ogg',
                    'class' => 'form-control mb-2',
                ],
            ],
            'allow_add' => true,
            'allow_delete' => true,
            'mapped' => false,
            'label' => false,
            'prototype' => true,
        ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class ,
        ]);
    }
}