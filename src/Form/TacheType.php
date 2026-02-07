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

class TacheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Titre de la tâche',
                    'maxlength' => 50
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Description de la tâche',
                    'rows' => 3,
                    'maxlength' => 100
                ]
            ])
            ->add('date_limite', DateType::class, [
                'label' => 'Date limite',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'À faire' => 'a_faire',
                    'En cours' => 'en_cours',
                    'Terminée' => 'terminee',
                    'Bloquée' => 'bloquee'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('priorite', ChoiceType::class, [
                'label' => 'Priorité',
                'choices' => [
                    'Basse' => 'basse',
                    'Moyenne' => 'moyenne',
                    'Haute' => 'haute',
                    'Urgente' => 'urgente'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('Id_objectif', EntityType::class, [
                'class' => Objectif::class,
                'choice_label' => 'titre',
                'label' => 'Objectif associé',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}