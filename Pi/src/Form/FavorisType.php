<?php

namespace App\Form;

use App\Entity\Favoris;
use App\Entity\Ressources;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FavorisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('note')
            ->add('titreressource')
            ->add('idresource', EntityType::class, [
                'class' => Ressources::class,
                'choice_label' => 'id',
            ])
            ->add('id', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Favoris::class,
        ]);
    }
}
