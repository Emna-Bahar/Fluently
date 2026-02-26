<?php

namespace App\Form;

use App\Entity\Langue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

use Vich\UploaderBundle\Form\Type\VichImageType;

class LangueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isEdit = $options['is_edit'] ?? false;

        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom de la langue',
                'attr' => [
                    'placeholder' => 'Ex : Anglais, Français, Espagnol...',
                    'autocomplete' => 'off'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le nom de la langue est obligatoire.'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s\'\-]+$/u',
                        'message' => 'Le nom ne peut contenir que des lettres, espaces, tirets et apostrophes.',
                    ]),
                ],
            ])

            ->add('popularite', TextType::class, [
                'label' => 'Popularité',
                'attr' => [
                    'placeholder' => 'Ex : Très haute, Haute, Moyenne, Faible...',
                    'autocomplete' => 'off'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La popularité est obligatoire.'
                    ]),
                    new Assert\Length([
                        'max' => 50,
                        'maxMessage' => 'La popularité ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])

            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée',
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez la langue, son usage, son importance...',
                    'autocomplete' => 'off'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La description est obligatoire.'
                    ]),
                    new Assert\Length([
                        'min' => 5,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])

            ->add('isActive', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Active' => true,
                    'Inactive' => false,
                ],
                'expanded' => true,
                'multiple' => false,
                'placeholder' => false,
                'constraints' => [
                    new Assert\NotNull([
                        'message' => 'Veuillez sélectionner le statut de la langue (Active ou Inactive).'
                    ]),
                ],
                'attr' => ['class' => 'status-radio-group'],
            ])

            ->add('drapeauFile', VichImageType::class, [
            'label' => 'Drapeau de la langue',
            'required' => !$isEdit,
            'allow_delete' => true,
            'delete_label' => 'Supprimer',
            'download_uri' => true,
            'image_uri' => true,
            'asset_helper' => true,
            'attr' => [
                'accept' => 'image/jpeg,image/png,image/webp'
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Langue::class,
            'is_edit' => false,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'langue_item',
            'validation_groups' => ['Default'],
        ]);

        $resolver->setAllowedTypes('is_edit', 'bool');
    }
}