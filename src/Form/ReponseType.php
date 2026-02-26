<?php

namespace App\Form;

use App\Entity\Reponse;
use App\Entity\Question;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\RequestStack;

class ReponseType extends AbstractType
{
    private $requestStack;
    private $entityManager;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $entityManager)
    {
        $this->requestStack = $requestStack;
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $request = $this->requestStack->getCurrentRequest();
        $questionId = $request ? $request->query->get('question_id') : null;
        
        // Récupérer la question si un ID est fourni
        $questionData = null;
        if ($questionId) {
            $questionData = $this->entityManager->getRepository(Question::class)->find($questionId);
        }

        $builder
            ->add('contenuRep', TextType::class, [
                'label' => 'Contenu de la réponse',
                'attr' => ['placeholder' => 'Entrez la réponse possible...']
            ])
            ->add('is_correct', CheckboxType::class, [
                'label' => 'Cette réponse est correcte',
                'required' => false,
            ])
            ->add('score', NumberType::class, [
                'label' => 'Score attribué si correcte',
                'attr' => ['min' => 0, 'max' => 20, 'step' => 0.5],
                'required' => false,
            ])
            ->add('Id_question', EntityType::class, [
                'class' => Question::class,
                'choice_label' => 'enonce',
                'label' => 'Question associée',
                'placeholder' => 'Choisir une question',
                'data' => $questionData,
                'required' => true,
                'attr' => $questionData ? ['readonly' => true] : [], // Empêche la modification si pré-rempli
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}