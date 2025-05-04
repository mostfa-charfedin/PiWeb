<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use App\Form\ReponseType;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Question text is required.']),
                    new Length([
                        'max' => 80,
                        'maxMessage' => 'The question cannot exceed 80 characters.',
                    ]),
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('reponses', CollectionType::class, [
                'entry_type' => ReponseType::class,
                'allow_add' => true,
                'by_reference' => false,
                'label' => 'Responses',
                'constraints' => [
                    new Callback([$this, 'validateAtLeastOneCorrect'])
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }

    // Validation function to check at least one correct response
    public function validateAtLeastOneCorrect($reponses, ExecutionContextInterface $context): void
    {
        $hasCorrect = false;

        foreach ($reponses as $reponse) {
            if ($reponse->getStatus() === 'correct') {
                $hasCorrect = true;
                break;
            }
        }

        if (!$hasCorrect) {
            $context->buildViolation('At least one response must be marked as correct.')
                ->atPath('[0].status') // highlight the first checkbox
                ->addViolation();
        }
    }
}