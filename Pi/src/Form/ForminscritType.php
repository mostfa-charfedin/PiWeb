<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ForminscritType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom'
        ])
        ->add('prenom', TextType::class, [
            'label' => 'Prenom'
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email'
        ])
        ->add('password', PasswordType::class, [
            'label' => 'Password'
        ])
    
        ->add('cin', TextType::class, [
                'label' => 'cin'
        ])
        ->add('datenaissance', DateType::class, [
            
            'widget' => 'single_text', 
         
        ])
        ->add('role', TextType::class, [
                'label' => 'role'
        ])
        ->add('status', TextType::class, [
                'label' => 'status'
            ])
         
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
