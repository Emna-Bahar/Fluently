<?php

namespace App\Form;

use App\Entity\Test;
use App\Entity\Langue;
use App\Entity\Niveau;
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
                    'Test de fin de niveau' => 'Test de fin de niveau',
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
            ->add('niveau', EntityType::class, [
                'class' => Niveau::class,
                'choice_label' => function(Niveau $niveau) {
                    $langue = $niveau->getIdLangue();
                    $langueNom = $langue ? $langue->getNom() : 'Sans langue';
                    return $langueNom . ' - ' . $niveau->getTitre();
                },
                'required' => false,
                'placeholder' => '(Optionnel - Pour test de fin de niveau uniquement)',
                'label' => 'Niveau associé',
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