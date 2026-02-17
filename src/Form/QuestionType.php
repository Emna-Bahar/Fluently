<?php

namespace App\Form;

use App\Entity\Question;
use App\Entity\Test;
use App\Entity\Reponse;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Question1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('enonce')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'QCM' => 'qcm',
                    'Texte libre' => 'texte_libre',
                    '🎤 Question orale' => 'oral',
                ],
                'placeholder' => 'Choisir un type',
                'required' => true,
            ])
            ->add('score_max')
            ->add('Id_test', EntityType::class, [
                'class' => Test::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
