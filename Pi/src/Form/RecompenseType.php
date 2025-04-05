<?php

namespace App\Form;

use App\Entity\Programmebienetre;
use App\Entity\Recompense;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecompenseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateattribution', null, [
                'widget' => 'single_text',
            ])
            ->add('type')
            ->add('statusrecompence')
            ->add('idprogramme', EntityType::class, [
                'class' => Programmebienetre::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recompense::class,
        ]);
    }
}
