<?php

namespace App\Form;

use App\Entity\Groupe;
use App\Entity\Session;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateHeure', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date et heure',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Planifiée' => 'planifiée',
                    'En cours' => 'en_cours',
                    'Terminée' => 'terminée',
                    'Annulée' => 'annulée',
                ],
                'attr' => [
                    'class' => 'form-select'
                ],
                'required' => true,
            ])
            ->add('lienReunion', UrlType::class, [
                'label' => 'Lien de réunion (optionnel)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'https://zoom.us/j/...'
                ],
                'required' => false,
            ])
            ->add('groupe', EntityType::class, [
    'label' => 'Groupe',
    'class' => Groupe::class,
    'choice_label' => function(Groupe $groupe) {
        return sprintf(
            '%s (ID: %d)',
            $groupe->getNom() ?? 'Groupe',
            $groupe->getId()
        );
    },
])
->add('user', EntityType::class, [
    'label' => 'Tuteur',
    'class' => User::class,
    'choice_label' => function(User $user) {
        return sprintf(
            '%s %s (%s)',
            $user->getNom() ?? '',
            $user->getPrenom() ?? '',
            $user->getEmail() ?? ''
        );
    },
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