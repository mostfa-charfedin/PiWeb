<?php

namespace App\Form;

use App\Entity\Ressources;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RessourcesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Document' => 'Document',
                    'Video' => 'Video',
                    'Article' => 'Article',
                    'Blog' => 'Blog',
                    'Tutorial' => 'Tutorial',
                ],
                'attr' => ['class' => 'form-select'],
                'placeholder' => 'Choose the type',
            ])
            ->add('description')
            ->add('lien', null, [
                'required' => false,  // Allow the link to be optional
            ])
            ->add('noteaverage')
            ->add('id', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ressources::class,
        ]);
    }
}
