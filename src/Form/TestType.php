<?php

namespace App\Form;

use App\Entity\Test;
use App\Entity\Langue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre du test',
                'attr' => ['placeholder' => 'Ex: Test de niveau Anglais A2'],
                'help' => 'Donnez un titre descriptif à votre test',
            ])
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'Test de niveau' => 'Test de niveau',
                    'Quiz débutant' => 'quiz_debutant',
                    'Test intermédiaire' => 'test_intermediaire',
                    'Examen final' => 'examen_final',
                    'Quiz gamifié' => 'quiz_gamifie',
                ],
                'placeholder' => 'Choisir un type de test',
                'required' => true,
                'label' => 'Type de test',
            ])
            ->add('dureeEstimee', IntegerType::class, [
                'label' => 'Durée estimée (minutes)',
                'required' => false,
                'attr' => ['placeholder' => '15', 'min' => 1],
                'help' => 'Temps estimé pour compléter le test',
            ])
            ->add('langue', EntityType::class, [
                'class' => Langue::class,
                'choice_label' => 'nom',
                'label' => 'Langue',
                'placeholder' => 'Choisir une langue',
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