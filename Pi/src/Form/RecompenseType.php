<?php

namespace App\Form;

use App\Entity\Recompense;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RecompenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Gift Card' => 'Gift Card',
                    'Voucher' => 'Voucher',
                    'Bonus' => 'Bonus',
                    'Recognition' => 'Recognition',
                    'Other' => 'Other'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Select reward type'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Please select a reward type!'
                    ]),
                    new Assert\Choice([
                        'choices' => ['Gift Card', 'Voucher', 'Bonus', 'Recognition', 'Other'],
                        'message' => 'Please select a valid reward type!'
                    ])
                ]
            ])
            ->add('dateattribution', DateType::class, [
                'label' => 'Attribution Date',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d')
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Please select an attribution date!'
                    ]),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'The attribution date cannot be in the past!'
                    ])
                ]
            ])
            ->add('statusrecompence', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Pending' => 'Pending',
                    'Approved' => 'Approved',
                    'Delivered' => 'Delivered',
                    'Cancelled' => 'Cancelled'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Select reward status'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Please select a reward status!'
                    ]),
                    new Assert\Choice([
                        'choices' => ['Pending', 'Approved', 'Delivered', 'Cancelled'],
                        'message' => 'Please select a valid reward status!'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recompense::class,
            'attr' => [
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}
