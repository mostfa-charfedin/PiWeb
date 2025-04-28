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
use Symfony\Component\Validator\Constraints as Assert;

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
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter task title',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'The title cannot be blank.']),
                    new Assert\Length([
                        'min' => 5,
                        'minMessage' => 'The title must be at least {{ limit }} characters.',
                    ]),
                ],
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'attr' => [
                    'rows' => 4,
                    'placeholder' => 'Enter task description',
                    'class' => 'form-control',
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'The description cannot be blank.']),
                    new Assert\Length([
                        'min' => 10,
                        'minMessage' => 'The description must be at least {{ limit }} characters.',
                    ]),
                ],
            ])
            ->add('date', IntegerType::class, [
                'label' => 'Duration (weeks)',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Enter duration in weeks (1-6)',
                    'class' => 'form-control',
                    'min' => 1,
                    'max' => 6,
                ],
                'constraints' => [
                    new Assert\Range([
                        'min' => 1,
                        'max' => 6,
                        'notInRangeMessage' => 'The duration must be between {{ min }} and {{ max }} weeks.',
                    ]),
                ],
            ])
            ->add('iduser', EntityType::class, [
                'class' => User::class,
                'label' => 'Assign To',
                'required' => true,
                'choice_label' => function (User $user) {
                    return sprintf('%s %s (ID: %d)', $user->getNom(), $user->getPrenom(), $user->getId());
                },
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.role IN (:roles)')
                        ->setParameter('roles', ['USER', 'chefprojet'])
                        ->orderBy('u.nom', 'ASC');
                },
                'attr' => [
                    'class' => 'd-none', // styled via JS/UI table
                ],
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
