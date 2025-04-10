<?php

namespace App\Form;

use App\Entity\Complaint;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ComplaintType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('subject', TextType::class, [
                'label' => 'Subject',
                'attr' => ['class' => 'form-control']
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Details',
                'attr' => ['class' => 'form-control', 'rows' => 5]
            ]);

        if ($options['is_admin']) {
            $this->addAdminFields($builder);
        }
    }

    private function addAdminFields(FormBuilderInterface $builder): void
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
                'required' => false,
                'placeholder' => 'Select status...',
            ])
            ->add('response', TextareaType::class, [
                'label' => 'Admin Response',
                'attr' => ['class' => 'form-control', 'rows' => 3],
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Complaint::class,
            'is_admin' => false,
        ]);
    }
}