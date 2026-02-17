<?php

namespace App\Form;

use App\Entity\Session;
use App\Entity\Groupe;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateHeure', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date et Heure',
                'attr' => ['class' => 'form-control'],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Planifiée' => 'planifiée',
                    'En cours' => 'en cours',
                    'Terminée' => 'terminée',
                    'Annulée' => 'annulée',
                ],
                'label' => 'Statut',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('lienReunion', TextType::class, [
                'label' => 'Lien de la Réunion',
                'attr' => ['class' => 'form-control', 'placeholder' => 'https://meet.google.com/...'],
            ])
            ->add('group', EntityType::class, [
                'class' => Groupe::class,
                'choice_label' => 'nom',
                'label' => 'Groupe',
                'placeholder' => 'Sélectionnez un groupe',
                'attr' => ['class' => 'form-select'],
            ])
            ->add('user', EntityType::class, [  // ← AJOUTÉ ICI
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getPrenom() . ' ' . $user->getNom();
                },
                'label' => 'Enseignant',
                'placeholder' => 'Sélectionnez un enseignant',
                'attr' => ['class' => 'form-select'],
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}