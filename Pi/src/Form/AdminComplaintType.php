<?php

namespace App\Form;

use App\Entity\Complaint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('status', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Pending' => null,
                    'Resolved' => true,
                    'Rejected' => false,
                ],
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Select a status',
            ])
            ->add('response', TextareaType::class, [
                'label' => 'Admin Response',
                'attr' => ['class' => 'form-control', 'rows' => 5],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Complaint::class,
        ]);
    }
}