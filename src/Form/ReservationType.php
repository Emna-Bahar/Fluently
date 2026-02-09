<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateReservation', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de réservation',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'En attente' => 'en_attente',
                    'Confirmée' => 'confirmee',
                    'Annulée' => 'annulee',
                    'Terminée' => 'terminee',
                ],
                'attr' => [
                    'class' => 'form-select'
                ],
                'required' => true,
            ])
            ->add('session', EntityType::class, [
    'label' => 'Session',
    'class' => Session::class,
    'choice_label' => function(Session $session) {
        return sprintf(
            'Session #%d - %s (%s)',
            $session->getId(),
            $session->getDateHeure()->format('d/m/Y H:i'),
            $session->getStatut()
        );
    },
    'placeholder' => 'Choisir une session',
    'required' => true,
])
->add('user', EntityType::class, [
    'label' => 'Utilisateur',
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
            'data_class' => Reservation::class,
        ]);
    }
}