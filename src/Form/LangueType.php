<?php

namespace App\Form;

use App\Entity\Langue;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class LangueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('popularite')
            ->add('isActive')
            // Champ upload (non mappé)
            ->add('drapeauFile', FileType::class, [
                'label' => 'Drapeau (image)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2m',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif', 'image/webp'],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (jpg, png, gif, webp)',
                    ])
                ],
            ])
            // Si tu veux garder l'ancien champ texte (optionnel)
            ->add('drapeau', null, ['required' => false, 'disabled' => true]); // juste affichage
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Langue::class,
        ]);
    }
}