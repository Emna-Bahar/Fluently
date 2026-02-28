<?php

namespace App\Form;

use App\Entity\Langue;
use App\Entity\Niveau;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class NiveauType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Id_langue', EntityType::class, [
                'class'        => Langue::class,
                'choice_label' => 'nom',
                'label'        => 'Langue',
                'placeholder'  => 'Sélectionner une langue',
                'constraints'  => [
                    new Assert\NotBlank(['message' => 'La langue est obligatoire.']),
                ],
            ])
            ->add('titre', TextType::class, [
                'label'       => 'Titre du niveau',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le titre est obligatoire.']),
                    new Assert\Length([
                        'min'        => 2,
                        'max'        => 255,
                        'minMessage' => 'Le titre doit avoir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le titre ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])

            ->add('description', TextType::class, [ 
                'label'       => 'Description',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire.']),
                    new Assert\Length([
                        'min'        => 10,
                        'minMessage' => 'La description doit avoir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])

            ->add('imageCouvertureFile', FileType::class, [
                'label'       => 'Image de couverture (jpg, png, webp)',
                'mapped'      => false,
                'required'    => false,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'L\'image de couverture est obligatoire lors de la création.',
                        'groups'  => ['create'],
                    ]),
                    new Assert\File([
                        'maxSize'          => '5M',
                        'mimeTypes'        => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Format non valide. Choisissez jpg, png ou webp.',
                        'maxSizeMessage'   => 'L\'image ne doit pas dépasser 5 Mo.',
                    ]),
                ],
            ])

            ->add('difficulte', TextType::class, [
                'label'       => 'Difficulté',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La difficulté est obligatoire.']),
                ],
            ])

            ->add('ordre', null, [
                'label'       => 'Ordre (1 = A1, 2 = A2, etc.)',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'L\'ordre est obligatoire.']),
                    new Assert\Positive(['message' => 'L\'ordre doit être positif.']),
                    new Assert\Type([
                        'type'    => 'integer',
                        'message' => 'L\'ordre doit être un nombre entier.',
                    ]),
                ],
            ])

            ->add('seuil_score_min', null, [
                'label'       => 'Score minimum pour réussir',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le score minimum est obligatoire.']),
                    new Assert\GreaterThanOrEqual([
                        'value'   => 0,
                        'message' => 'Le score minimum doit être ≥ 0.',
                    ]),
                ],
            ])

            ->add('seuil_score_max', null, [
                'label'       => 'Score maximum possible',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le score maximum est obligatoire.']),
                    new Assert\GreaterThan([
                        'value'   => 0,
                        'message' => 'Le score maximum doit être > 0.',
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Niveau::class,
            'validation_groups' => function ($form) {
                if ($form->getData() && $form->getData()->getId()) {
                    return ['Default', 'edit'];
                }
                return ['Default', 'create'];
            },
        ]);
    }
}