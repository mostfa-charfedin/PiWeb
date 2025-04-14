<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Programmebienetre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Validator\Constraints\Length;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rating', IntegerType::class, [
                'label' => 'Rating',
                'required' => true,
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                    'class' => 'form-control',
                    'placeholder' => 'Enter a rating from 1 to 5'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a rating'
                    ]),
                    new Range([
                        'min' => 1,
                        'max' => 5,
                        'notInRangeMessage' => 'Rating must be between {{ min }} and {{ max }}',
                    ]),
                ],
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Comment',
                'required' => true,
                'attr' => [
                    'rows' => 4,
                    'class' => 'form-control',
                    'placeholder' => 'Share your experience with this program...',
                    'minlength' => 10,
                    'maxlength' => 1000,
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a comment'
                    ]),
                    new Length([
                        'min' => 10,
                        'max' => 1000,
                        'minMessage' => 'Your comment must be at least {{ limit }} characters long',
                        'maxMessage' => 'Your comment cannot be longer than {{ limit }} characters',
                    ]),
                ],
            ])
            // Nous n'ajoutons pas les champs programme et user car ils seront définis dans le contrôleur
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
            'attr' => [
                'novalidate' => 'novalidate', // Let's handle validation through JavaScript
            ],
        ]);
    }
}