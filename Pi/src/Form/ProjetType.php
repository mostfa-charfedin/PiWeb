<?php

namespace App\Form;

use App\Entity\Projet;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\EntityRepository;

class ProjetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Project Title',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the project title here',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'The project title cannot be blank.',
                    ]),
                    new Assert\Length([
                        'min' => 8,
                        'minMessage' => 'The project title must be at least {{ limit }} characters.',
                        'max' => 255,
                        'maxMessage' => 'The project title cannot be longer than {{ limit }} characters.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => [
                    'rows' => 6,
                    'placeholder' => 'Provide a detailed description of the project',
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'The project description cannot be blank.',
                    ]),
                    new Assert\Length([
                        'min' => 30,
                        'minMessage' => 'The description must be at least {{ limit }} characters.',
                    ]),
                ],
            ])
            ->add('iduser', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'label' => 'Project Manager',
                'placeholder' => 'Choose a Project Manager',
                'required' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role = :role')
                        ->setParameter('role', 'chefprojet');
                },
                'attr' => [
                    'title' => 'Select the user who will manage this project',
                ],
                'constraints' => [
                    new Assert\NotNull([
                        'message' => 'You must assign a project manager.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Projet::class,
        ]);
    }
}
