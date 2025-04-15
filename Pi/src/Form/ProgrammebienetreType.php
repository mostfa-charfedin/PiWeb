<?php

namespace App\Form;

use App\Entity\Programmebienetre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ProgrammebienetreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Title',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter program title'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Title field cannot be empty!'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'Title must be at least {{ limit }} characters long',
                        'maxMessage' => 'Title cannot be longer than {{ limit }} characters'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/',
                        'message' => 'Title can only contain letters and spaces'
                    ])
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Physical' => 'Physical',
                    'Mental' => 'Mental',
                    'Social' => 'Social',
                    'Professional' => 'Professional'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Please select a program type!'
                    ]),
                    new Assert\Choice([
                        'choices' => ['Physical', 'Mental', 'Social', 'Professional'],
                        'message' => 'Invalid program type selected'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Describe the program in detail'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Description field cannot be empty!'
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'Description must be at least {{ limit }} characters long',
                        'maxMessage' => 'Description cannot be longer than {{ limit }} characters'
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s\.,]+$/',
                        'message' => 'Description can only contain letters, spaces, dots and commas'
                    ])
                ]
            ])
            ->add('iduser', EntityType::class, [
                'label' => 'Administrator',
                'class' => User::class,
                'choice_label' => function(User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('u')
                              ->where('u.role = :role')
                              ->setParameter('role', 'ADMIN');
                },
                'placeholder' => 'Choose an Administrator',
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Please select an administrator!'
                    ])
                ]
            ])
            ->add('date_programme', DateTimeType::class, [
                'label' => 'Program Date and Time',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Select program date and time',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez sélectionner une date et une heure pour le programme!'
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'now',
                        'message' => 'La date et l\'heure du programme ne peuvent pas être dans le passé!'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programmebienetre::class,
            'attr' => [
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}