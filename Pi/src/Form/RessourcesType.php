<?php

namespace App\Form;

use App\Entity\Ressources;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Validator\Constraints as Assert;

class RessourcesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Resource Title',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Title is required'
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'Title must be at least {{ limit }} characters long',
                        'maxMessage' => 'Title cannot be longer than {{ limit }} characters'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Resource Title'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Document' => 'Document',
                    'Video' => 'Video',
                    'Article' => 'Article',
                    'Blog' => 'Blog',
                    'Tutorial' => 'Tutorial',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Type is required'
                    ]),
                    new Assert\Choice([
                        'choices' => ['Document', 'Video', 'Article', 'Blog', 'Tutorial'],
                        'message' => 'Choose a valid type'
                    ])
                ],
                'attr' => [
                    'class' => 'form-select',
                    'style' => 'font-weight: 600;'
                ],
                'placeholder' => 'Choose the type'
            ])
            ->add('description', TextType::class, [
                'label' => 'Description',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Description is required'
                    ]),
                    new Assert\Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'Description must be at least {{ limit }} characters long',
                        'maxMessage' => 'Description cannot be longer than {{ limit }} characters'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Write a short description',
                    'rows' => '4'
                ]
            ])
            ->add('lien', UrlType::class, [
                'label' => 'Link (optional)',
                'required' => false,
                'constraints' => [
                    new Assert\Url([
                        'message' => 'The URL "{{ value }}" is not a valid URL',
                        'protocols' => ['http', 'https']
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Link to the resource (optional)'
                ]
            ])
            ->add('noteaverage', NumberType::class, [
                'label' => 'Average Rating (0-10)',
                'constraints' => [
                    new Assert\Range([
                        'min' => 0,
                        'max' => 10,
                        'notInRangeMessage' => 'Rating must be between {{ min }} and {{ max }}'
                    ])
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Average Rating (0-10)',
                    'step' => '0.1',
                    'min' => '0',
                    'max' => '10'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ressources::class,
        ]);
    }
}
