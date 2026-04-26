<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Session;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $isStudentView = $options['is_student_view'] ?? false;

        $builder
            ->add('dateReservation', DateType::class, [
                'widget' => 'single_text',
                'label'  => 'Date de Réservation',
            ]);

        if ($isStudentView) {
            $builder->add('statut', HiddenType::class, [
                'data' => 'en attente',
            ]);
        } else {
            $builder->add('statut', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'en attente',
                    'Confirmée'  => 'confirmée',
                    'Annulée'    => 'annulée',
                    'Refusée'    => 'refusée',
                ],
                'label' => 'Statut',
            ]);
        }

        $builder
            ->add('session', EntityType::class, [
                'class'        => Session::class,
                // ✅ PHPStan fix ligne 50 (method.nonObject) :
                // getDateHeure() retourne DateTimeInterface|null
                // On utilise l'opérateur ?-> + ?? pour éviter format() sur null
                'choice_label' => function (Session $session): string {
                    $date = $session->getDateHeure()?->format('d/m/Y H:i') ?? 'Date inconnue';
                    return $date . ' - ' . ($session->getStatut() ?? '');
                },
                'label'       => 'Session',
                'placeholder' => 'Choisir une session',
                'disabled'    => $isStudentView,
            ])
            ->add('user', EntityType::class, [
                'class'        => User::class,
                'choice_label' => function (User $user): string {
                    return $user->getPrenom() . ' ' . $user->getNom();
                },
                'label'       => 'Étudiant',
                'placeholder' => 'Choisir un étudiant',
                'disabled'    => $isStudentView,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'      => Reservation::class,
            'is_student_view' => false,
        ]);
    }
}