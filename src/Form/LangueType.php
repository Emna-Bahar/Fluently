<?php

namespace App\Form;

use App\Entity\Langue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class LangueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Nom - obligatoire + unique (déjà dans l'entité)
            ->add('nom', TextType::class, [
                'label' => 'Nom de la langue *',
                'attr' => ['placeholder' => 'Ex : Anglais, Français, Espagnol...'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Le nom de la langue est obligatoire.']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le nom ne peut pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])

            // Description - obligatoire, min 5 caractères
            ->add('description', TextareaType::class, [
                'label' => 'Description détaillée *',
                'attr' => [
                    'rows' => 5,
                    'placeholder' => 'Décrivez la langue, son usage, son importance...',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'La description est obligatoire.']),
                    new Assert\Length([
                        'min' => 5,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                    ]),
                ],
            ])

            // Popularité - texte, optionnel
            ->add('popularite', TextType::class, [
                'label' => 'Popularité (optionnel)',
                'required' => false,
                'attr' => ['placeholder' => 'Ex : Haute, Très haute, Moyenne, Faible...'],
            ])

            // Statut actif - obligatoire (booléen 0/1)
            ->add('isActive', null, [
                'label' => 'Statut de la langue *',
                'constraints' => [
                    new Assert\NotNull(['message' => 'Veuillez indiquer si la langue est active ou non.']),
                ],
            ])

            // Drapeau - obligatoire en création seulement
            ->add('drapeauFile', FileType::class, [
                'label' => 'Drapeau de la langue * (PNG, JPG, WebP – max 2 Mo)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new Assert\File([
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (jpg, png, webp).',
                        'maxSizeMessage' => 'L\'image ne doit pas dépasser 2 Mo.',
                    ]),
                    new Assert\NotBlank([
                        'message' => 'Le drapeau est obligatoire lors de la création.',
                        'groups' => ['create'],
                    ]),
                ],
                'attr' => ['accept' => 'image/jpeg,image/png,image/webp'],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Langue::class,
            'validation_groups' => function ($form) {
                if ($form->getData() && $form->getData()->getId()) {
                    return ['Default', 'edit'];
                }
                return ['Default', 'create'];
            },
        ]);
    }
}