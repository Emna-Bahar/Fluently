<?php
// ============================================================
// PATCH OBLIGATOIRE — src/Form/SessionType.php
//
// Problème : le champ dateHeure utilise DateTimeType avec
// widget="single_text". Par défaut Symfony attend le format
// HTML5 "datetime-local" : YYYY-MM-DDTHH:MM
// Mais si l'input du formulaire classique retourne un autre
// format, la validation échoue avec "Please enter a valid
// date and time".
//
// Ce fichier remplace votre SessionType existant.
// Le seul changement est l'ajout de :
//   'input_format' => 'Y-m-d\TH:i'
// sur le champ dateHeure, pour s'assurer que Symfony accepte
// le format ISO retourné par <input type="datetime-local">.
// ============================================================

namespace App\Form;

use App\Entity\Groupe;
use App\Entity\Session;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateHeure', DateTimeType::class, [
                'widget'       => 'single_text',
                // ✅ FIX : input_format correspondant au format de datetime-local
                // Le navigateur retourne "2026-05-20T10:00" et Symfony sait le lire.
                // Sans cette ligne, Symfony peut rejeter le format avec l'erreur
                // "This form should not contain extra fields / Please enter a valid date and time".
                'input_format' => 'Y-m-d\TH:i',
                'html5'        => true,
                'label'        => 'Date et heure',
                'attr'         => ['class' => 'form-control'],
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Planifiée' => 'planifiée',
                    'En cours'  => 'en cours',
                    'Terminée'  => 'terminée',
                    'Annulée'   => 'annulée',
                ],
                'label' => 'Statut',
                'attr'  => ['class' => 'form-select'],
            ])
            ->add('lienReunion', TextType::class, [
                'label'    => 'Lien de réunion',
                'required' => false,
                'attr'     => ['class' => 'form-control', 'placeholder' => 'https://meet.google.com/...'],
            ])
            ->add('group', EntityType::class, [
                'class'        => Groupe::class,
                'choice_label' => 'nom',
                'label'        => 'Groupe',
                'attr'         => ['class' => 'form-select'],
            ]);

        // Le champ user (enseignant) n'est affiché QUE si show_user_field = true
        // (option utilisée par l'admin). Le controller force toujours setUser()
        // donc ce champ n'est jamais nécessaire pour le prof.
        if ($options['show_user_field']) {
            $builder->add('user', EntityType::class, [
                'class'        => User::class,
                'choice_label' => function (User $u) {
                    return $u->getPrenom() . ' ' . $u->getNom();
                },
                'label' => 'Enseignant',
                'attr'  => ['class' => 'form-select'],
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'       => Session::class,
            'show_user_field'  => false,
        ]);
    }
}