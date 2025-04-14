<?php



namespace App\Form;

use App\Entity\Reponse;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class ReponseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('response')
            ->add('status', CheckboxType::class, [
                'label' => 'Correct answer?',
                'required' => false,
                'mapped' => true,
            ]);

        // Transform string <=> boolean
        $builder->get('status')
            ->addModelTransformer(new CallbackTransformer(
                // transform string (DB) to boolean (form)
                fn ($status) => $status === 'correct',
                // transform boolean (form) to string (DB)
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

