<?php

namespace App\Form;

use App\Entity\Test;
use App\Entity\Langue;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date_passage')
            ->add('duree')
            ->add('type')
            ->add('Id_langue', EntityType::class, [
                'class' => Langue::class,
                'choice_label' => 'id',
            ])
            ->add('Id_user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'Quiz débutant' => 'quiz_debutant',
                    'Test intermédiaire' => 'test_intermediaire',
                    'Examen final' => 'examen_final',
                    'Test de Niveau' => 'Niveau',
                    'Quiz gamifié' => 'quiz_gamifie',
                ],
                'placeholder' => 'Choisir un type de test',
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }
}