<?php

namespace App\Form;

use App\Entity\Quiz;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Quiz Title',
                'constraints' => [
                    new NotBlank(['message' => 'Quiz title is required.']),
                    new Regex([
                        'pattern' => '/^[\p{L}0-9\s\-]+$/u',
                        'message' => 'Quiz title should only contain letters, numbers, spaces, or hyphens.',
                    ]),
                ],
            ])
            ->add('datecreation', DateTimeType::class, [
                'label' => 'Creation Date',
                'widget' => 'single_text',
                'data' => new \DateTime(), // default to today
                'html5' => true,
                'constraints' => [
                    new Callback([$this, 'validateOnlyToday']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Quiz::class,
        ]);
    }

    public function validateOnlyToday($date, ExecutionContextInterface $context): void
    {
        if ($date instanceof \DateTimeInterface) {
            $today = new \DateTime();
            $today->setTime(0, 0, 0);
            $input = clone $date;
            $input->setTime(0, 0, 0);

            if ($input != $today) {
                $context->buildViolation('Only today\'s date is allowed.')
                    ->atPath('datecreation')
                    ->addViolation();
            }
        }
    }
}
