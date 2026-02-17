<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoursPersonnaliseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vocabulaire', TextareaType::class, [
                'label' => '🎯 Vocabulaire à travailler',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Les verbes irréguliers, le vocabulaire des voyages...',
                    'rows' => 3,
                    'class' => 'form-control'
                ]
            ])
            ->add('grammaire', TextareaType::class, [
                'label' => '📚 Points de grammaire',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Le présent simple, les prépositions...',
                    'rows' => 3,
                    'class' => 'form-control'
                ]
            ])
            ->add('nouveauxMots', TextareaType::class, [
                'label' => '🔤 Nouveaux mots à apprendre',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: house, car, tree (un mot par ligne)',
                    'rows' => 4,
                    'class' => 'form-control'
                ]
            ])
            ->add('themesYoutube', TextareaType::class, [
                'label' => '🎥 Thèmes pour vidéos YouTube',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Ex: Conversations, Grammaire, Prononciation...',
                    'rows' => 3,
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}