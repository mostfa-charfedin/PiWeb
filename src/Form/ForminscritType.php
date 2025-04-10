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
use Symfony\Component\Validator\Constraints as Assert;

class ForminscritType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'First Name',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'First name is required',
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'minMessage' => 'First name must be at least {{ limit }} characters',
                        'max' => 50,
                        'maxMessage' => 'First name cannot exceed {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('prenom', TextType::class, [
                'label' => 'Last Name',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Last name is required',
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'minMessage' => 'Last name must be at least {{ limit }} characters',
                        'max' => 50,
                        'maxMessage' => 'Last name cannot exceed {{ limit }} characters',
                    ]),
                ],
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Email is required',
                    ]),
                    new Assert\Email([
                        'message' => 'Please enter a valid email address',
                    ]),
                ],
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Password',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Password is required',
                    ]),
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Password must be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('cin', TextType::class, [
                'label' => 'CIN',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'CIN is required',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'CIN must contain only digits',
                    ]),
                    new Assert\Length([
                        'min' => 8,
                        'minMessage' => 'CIN must be at least {{ limit }} digits long',
                    ]),
                ],
            ])
            
            ->add('datenaissance', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date of Birth',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Date of birth is required',
                    ]),
                    // new Assert\Date([ 'message' => 'Please enter a valid date', ]), <-- Retirée
                    new Assert\LessThanOrEqual([
                        'value' => (new \DateTime())->modify('-18 years'),
                        'message' => 'You must be at least 18 years old',
                    ]),
                ],
            ])
            
            
            ->add('numPhone', TextType::class, [
                'label' => 'Phone Number',
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Phone number is required',
                    ]),
                    new Assert\Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Phone number must contain only digits',
                    ]),
                    new Assert\Length([
                        'min' => 8,
                        'minMessage' => 'Phone number must be at least {{ limit }} digits',
                        'max' => 15,
                        'maxMessage' => 'Phone number cannot exceed {{ limit }} digits',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
