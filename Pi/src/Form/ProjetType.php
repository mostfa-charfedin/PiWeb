<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', null, [
                'label' => 'Project Title',
                'attr' => [
                    'placeholder' => 'Enter the project title here',
                ],
                'required' => true, // Ensures the field is required
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'rows' => 6, // Bigger field
                    'placeholder' => 'Provide a detailed description of the project',
                ],
                'required' => true, // Ensures the field is required
            ])
            ->add('iduser', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'label' => 'Project Manager',
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('u')
                              ->where('u.role = :role')
                              ->setParameter('role', 'chefprojet');
                },
                'placeholder' => 'Choose a Project Manager', // Will still display, but not null
                'required' => true, // Ensures the field is required
                'attr' => [
                    'title' => 'Select the user who will manage this project',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
