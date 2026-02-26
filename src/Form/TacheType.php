<?php

namespace App\Form;

use App\Entity\Objectif;
use App\Entity\Tache;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Pratiquer la conjugaison',
                    // Désactive la validation HTML5 native
                    'autocomplete' => 'off',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le titre est obligatoire.'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 50,
                        'minMessage' => 'Le titre doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'Le titre ne peut pas dépasser {{ limit }} caractères.'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[\p{L}0-9 \'\-\.,:;!?()]+$/u',
                        'message' => 'Le titre contient des caractères non autorisés.'
                    ]),
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Décrivez la tâche en détail...',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La description est obligatoire.'
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 100,
                        'minMessage' => 'La description doit contenir au moins {{ limit }} caractères.',
                        'maxMessage' => 'La description ne peut pas dépasser {{ limit }} caractères.'
                    ]),
                ]
            ])
            ->add('date_limite', DateType::class, [
                'label' => 'Date limite',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La date limite est obligatoire.'
                    ]),
                    new Assert\Type([
                        'type' => \DateTime::class,
                        'message' => 'La date limite doit être une date valide.'
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date limite ne peut pas être dans le passé.'
                    ]),
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'À faire'  => 'a_faire',
                    'En cours' => 'en_cours',
                    'Terminée' => 'terminee',
                    'Bloquée'  => 'bloquee',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'placeholder' => 'Choisir un statut',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Le statut est obligatoire.'
                    ]),
                    new Assert\Choice([
                        'choices'  => ['a_faire', 'en_cours', 'terminee', 'bloquee'],
                        'message'  => 'Le statut sélectionné est invalide.'
                    ]),
                ]
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priorité',
                'choices' => [
                    'Basse'   => 'basse',
                    'Moyenne' => 'moyenne',
                    'Haute'   => 'haute',
                    'Urgente' => 'urgente',
                ],
                'attr' => [
                    'class' => 'form-select',
                ],
                'placeholder' => 'Choisir une priorité',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'La priorité est obligatoire.'
                    ]),
                    new Assert\Choice([
                        'choices'  => ['basse', 'moyenne', 'haute', 'urgente'],
                        'message'  => 'La priorité sélectionnée est invalide.'
                    ]),
                ]
            ])
            ->add('Id_objectif', EntityType::class, [
                'class'        => Objectif::class,
                'choice_label' => 'titre',
                'label'        => 'Objectif associé',
                'attr' => [
                    'class' => 'form-select',
                ],
                'placeholder' => 'Sélectionner un objectif',
                'constraints' => [
                    new Assert\NotNull([
                        'message' => "L'objectif associé est obligatoire."
                    ]),
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}