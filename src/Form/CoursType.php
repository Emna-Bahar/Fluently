<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Langue;
use App\Entity\Niveau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Positive;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Url;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;

        $builder
            ->add('langue', EntityType::class, [
                'class' => Langue::class,
                'choice_label' => 'nom',
                'placeholder' => 'Choisir une langue',
                'mapped' => false,
                'required' => true,
                'label' => 'Langue',
                'attr' => ['class' => 'form-select form-select-lg'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner une langue.'
                    ]),
                ],
            ])
            ->add('Id_niveau', EntityType::class, [
                'class' => Niveau::class,
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
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un niveau.'
                    ]),
                ],
            ])
            ->add('numero', IntegerType::class, [
                'label' => 'Numéro de la leçon',
                'attr' => ['class' => 'form-control form-control-lg', 'placeholder' => 'Ex: 1, 2, 3...'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le numéro de la leçon est obligatoire.'
                    ]),
                    new Positive([
                        'message' => 'Le numéro doit être un nombre positif.'
                    ]),
                    new Assert\Type([
                        'type' => 'numeric',
                        'message' => 'Le numéro doit être un nombre.'
                    ]),
                ],
            ])
            ->add('cours_precedent_id', EntityType::class, [
                'class' => Cours::class,
                'choice_label' => 'numero',
                'label' => 'Cours précédent (optionnel)',
                'required' => false,
                'placeholder' => 'Aucun',
                'attr' => ['class' => 'form-select form-select-lg'],
            ])
            ->add('ressourcesFiles', CollectionType::class, [
                'entry_type' => FileType::class,
                'entry_options' => [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'accept' => '.pdf,.mp4,.webm,.jpg,.jpeg,.png,.gif,.webp,.mp3,.wav,.ogg',
                        'class' => 'form-control mb-2',
                    ],
                    'constraints' => [
                        new File([
                            'maxSize' => '50M',
                            'maxSizeMessage' => 'Le fichier ne doit pas dépasser 50 Mo.',
                            'mimeTypes' => [
                                'application/pdf',
                                'video/mp4', 'video/webm',
                                'image/jpeg', 'image/png', 'image/gif', 'image/webp',
                                'audio/mpeg', 'audio/wav', 'audio/ogg'
                            ],
                            'mimeTypesMessage' => 'Format de fichier non supporté.',
                        ])
                    ]
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'mapped' => false,
                'label' => false,
                'prototype' => true,
                'required' => false,
            ])
            ->add('youtubeLinks', TextareaType::class, [
                'label' => 'Liens YouTube (un lien par ligne – optionnel)',
                'required' => false,
                'mapped' => false,
                'constraints' => [
                    // SUPPRIMER Assert\All - pas de validation automatique
                ],
                'attr' => [
                    'class' => 'form-control form-control-lg',
                    'rows' => 4,
                    'placeholder' => "https://www.youtube.com/watch?v=xxxxxxxxxxx\nhttps://youtu.be/yyyyyyyyyyy"
                ],
            ])
            ->add('date_creation', null, [
                'label' => 'Date de création',
                'widget' => 'single_text',
                'required' => false,
                'attr' => ['class' => 'form-control form-control-lg'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
            'is_edit' => false,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'cours_item',
            'validation_groups' => ['Default'],
        ]);

        $resolver->setAllowedTypes('is_edit', 'bool');
    }
}