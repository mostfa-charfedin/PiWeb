<?php

namespace App\Form;

use App\Entity\Poste;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class PosteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $categories = [
            'Information Request',
            'Technical Support',
            'HR Inquiry',
            'Announcement',
            'Feedback & Suggestions',
            'Document Request',
            'Training & Development',
            'Meeting Request',
            'Policy Clarification',
            'Facilities Issue',
            'Project Collaboration',
            'General Discussion',
            'Job Posting/Internal Mobility',
            'Event Participation',
            'Lost and Found',
        ];

        $builder
            ->add('title', null, [
                'label' => 'Title',
                'attr' => ['placeholder' => 'Enter post Object ...'],
                'constraints' => [
                    new NotBlank(['message' => 'Title cannot be blank']),
                    new Length([
                        'min' => 5,
                        'max' => 100,
                        'minMessage' => 'Title must be at least {{ limit }} characters',
                        'maxMessage' => 'Title cannot be longer than {{ limit }} characters'
                    ])
                ]
            ])
            ->add('contenu', null, [
                'label' => 'Content',
                'attr' => ['placeholder' => 'Enter post content...'],
                'constraints' => [
                    new NotBlank(['message' => 'Content cannot be blank']),
                    new Length([
                        'min' => 10,
                        'minMessage' => 'Content must be at least {{ limit }} characters'
                    ])
                ]
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPG, PNG, max 2MB)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                        ],
                        'mimeTypesMessage' => 'Veuillez uploader une image valide (JPG, PNG)',
                        'maxSizeMessage' => 'L\'image ne doit pas dépasser 2MB.',
                    ])
                ],
            ])
            ->add('categories', ChoiceType::class, [
                'choices' => array_combine($categories, $categories),
                'choice_label' => fn($choice) => $choice,
                'multiple' => true,
                'expanded' => true,
                'constraints' => [
                    new \Symfony\Component\Validator\Constraints\NotBlank([
                        'message' => 'Veuillez sélectionner au moins une catégorie.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Poste::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'post_item',
        ]);
    }
}