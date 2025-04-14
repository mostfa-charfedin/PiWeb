<?php

namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Form\CallbackTransformer;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('response', TextType::class, [
                'label' => 'Response Text',
                'constraints' => [
                    new NotBlank(['message' => 'Response text is required.']),
                    new Length([
                        'max' => 80,
                        'maxMessage' => 'The response cannot exceed 80 characters.',
                    ]),
                ],
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter response (max 80 characters)',
                ],
            ])
            ->add('status', CheckboxType::class, [
                'label' => 'Correct answer?',
                'required' => false,
                'mapped' => true,
            ]);

        // Transform string <=> boolean for 'status'
        $builder->get('status')
            ->addModelTransformer(new CallbackTransformer(
                // Transform from DB string to form boolean
                fn ($status) => $status === 'correct',
                // Transform from form boolean to DB string
                fn ($checked) => $checked ? 'correct' : 'incorrect'
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reponse::class,
        ]);
    }
}