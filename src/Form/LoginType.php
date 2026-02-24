<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
use Symfony\Component\Form\FormBuilderInterface;
=======
>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
<<<<<<< HEAD
use Symfony\Component\OptionsResolver\OptionsResolver;
=======
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'label' => false,
<<<<<<< HEAD
                'required' => true,
                'attr' => [
                    'placeholder' => 'Email or Username',
=======
                'constraints' => [
                    new NotBlank(['message' => 'L\'email est requis.']),
                    new Email(['message' => 'Veuillez saisir un email valide.']),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Email ou nom d\'utilisateur'
>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => false,
<<<<<<< HEAD
                'required' => true,
                'attr' => [
                    'placeholder' => 'Password',
                ],
            ])
            ->add('remember_me', CheckboxType::class, [
                'label' => 'Remember me',
                'required' => false,
                'mapped' => false,
=======
                'constraints' => [
                    new NotBlank(['message' => 'Le mot de passe est requis.']),
                ],
                'attr' => [
                    'class' => 'form-control', 
                    'placeholder' => 'Mot de passe'
                ],
            ])
            ->add('remember_me', CheckboxType::class, [
                'label' => 'Remember Me',
                'required' => false,
                'label_attr' => ['class' => 'custom-control-label c-pointer'],
                'attr' => ['class' => 'custom-control-input'],
>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Login',
                'attr' => ['class' => 'btn btn-lg btn-primary w-100'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
<<<<<<< HEAD
        $resolver->setDefaults([]);
    }
}
=======
        $resolver->setDefaults([
            // Pas d'entité liée
        ]);
    }
}
>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
