<?php

namespace App\Form;

use App\Entity\Favoris;
use App\Entity\Ressources;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityRepository;

class FavorisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('note', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'd-none'
                ]
            ])
            ->add('idresource', EntityType::class, [
                'class' => Ressources::class,
                'choice_label' => 'titre',
                'label' => 'Ressource',
                'placeholder' => 'Sélectionnez une ressource',
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.titre', 'ASC');
                }
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
