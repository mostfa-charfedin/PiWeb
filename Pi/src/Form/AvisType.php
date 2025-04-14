<?php

namespace App\Form;

use App\Entity\Avis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Range;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rating', IntegerType::class, [
                'attr' => [
                    'min' => 1,
                    'max' => 5,
                    'class' => 'form-control'
                ],
                'label' => 'Rating (1-5)'
            ])
            ->add('commentaire', TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4
                ],
                'label' => 'Comment'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}