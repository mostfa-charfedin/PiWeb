<?php

namespace App\Form;

use App\Entity\Programmebienetre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Choice;

class ProgrammebienetreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le titre du programme'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un titre pour le programme'
                    ]),
                    new Length([
                        'min' => 3,
                        'max' => 255,
                        'minMessage' => 'Le titre est trop court (minimum {{ limit }} caractères)',
                        'maxMessage' => 'Le titre est trop long (maximum {{ limit }} caractères)'
                    ])
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Physique' => 'Physique',
                    'Mental' => 'Mental',
                    'Social' => 'Social',
                    'Professionnel' => 'Professionnel'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un type de programme'
                    ]),
                    new Choice([
                        'choices' => ['Physique', 'Mental', 'Social', 'Professionnel'],
                        'message' => 'Type invalide. Veuillez choisir parmi : Physique, Mental, Social ou Professionnel'
                    ])
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Décrivez le programme en détail'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir une description pour le programme'
                    ]),
                    new Length([
                        'min' => 10,
                        'max' => 255,
                        'minMessage' => 'La description est trop courte (minimum {{ limit }} caractères)',
                        'maxMessage' => 'La description est trop longue (maximum {{ limit }} caractères)'
                    ])
                ]
            ])
            ->add('iduser', EntityType::class, [
                'label' => 'Utilisateur',
                'class' => User::class,
                'choice_label' => function(User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'attr' => [
                    'class' => 'form-control'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez sélectionner un utilisateur pour le programme'
                    ])
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programmebienetre::class,
        ]);
    }
}
