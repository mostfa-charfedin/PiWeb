<?php
namespace App\Form;

use App\Entity\Tache;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class TacheType extends AbstractType
{
    private $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, [
                'label' => 'Title',
                'attr' => [
                    'placeholder' => 'Enter task title',
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Enter task description',
                    'class' => 'form-control'
                ],
                'required' => true,
            ])
            ->add('date', IntegerType::class, [
                'label' => 'Duration (weeks)',
                'attr' => [
                    'placeholder' => 'Enter duration in weeks',
                    'class' => 'form-control',
                    'min' => 1
                ],
                'required' => false,
            ])
            ->add('iduser', EntityType::class, [
                'class' => User::class,
                'choice_label' => function (User $user) {
                    return sprintf('%s %s (ID: %d)', 
                        $user->getNom(), 
                        $user->getPrenom(),
                        $user->getId()
                    );
                },
                'label' => 'Assign To',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role IN (:roles)')
                        ->setParameter('roles', ['USER', 'chefprojet'])
                        ->orderBy('u.nom', 'ASC');
                },
                'attr' => [
                    'class' => 'user-select',
                ],
                'required' => true,
                'placeholder' => 'Search or select user...',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tache::class,
        ]);
    }
}