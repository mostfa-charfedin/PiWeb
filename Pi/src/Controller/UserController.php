<?php

namespace App\Controller;
use App\Entity\User;
use App\Entity\Quiz;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Form\ForminscritType;
use App\Form\LoginformType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Form\FormError;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Enum\UserStatus;
use App\Enum\UserRole;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use GuzzleHttp\Client;



use Google\Cloud\AIPlatform\V1\Content;
use Google\Cloud\AIPlatform\V1\Part;
use Google\Cloud\AIPlatform\V1\SafetySetting;

use Google\Cloud\AIPlatform\V1\SafetySetting\HarmBlockThreshold;
use Google\Cloud\AIPlatform\V1\GenerationConfig;
use Google\Cloud\AIPlatform\V1\HarmCategory; // Some versions use this path
use Google\Cloud\AIPlatform\V1\GenerateContentRequest;
use App\Service\ChatGPTService;
use Google\Cloud\AIPlatform\V1\Client\PredictionServiceClient;
class UserController extends AbstractController
{

 
    #[Route('/profile', name: 'profile')]
    public function profile(Request $request, SessionInterface $session, 
    EntityManagerInterface $entityManager, 
    ChartBuilderInterface $chartBuilder,    ChatGPTService $chatGptService ,
    ValidatorInterface $validator): Response
    {
   
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        $allowed = match($user->getRole()) {
            'ADMIN', 'USER', 'chefprojet' => true,
            default => false
        };
        
        if (!$allowed) { 
            $this->addFlash('error', 'Accès réservé aux administrateurs');
            return $this->render('user/admin/404.html.twig');
        }
         // Get all scores
       
        
 
         $scores = $user->getScores();
         $quizzesPassed = count($scores);
         $totalQuizzesAvailable = $entityManager->getRepository(Quiz::class)->count([]);
 
         // Récupère les scores triés
         $top3Scores = $scores->toArray();
         usort($top3Scores, fn($a, $b) => $b->getScore() <=> $a->getScore());
         $top3Scores = array_slice($top3Scores, 0, 3);
 
         // Crée les données pour les catégories de quiz
         $quizCategories = [];
         $userPerformanceData = [];
         $averageScoresData = [];
         foreach ($scores as $score) {
             $quizCategories[] = ['name' => $score->getQuiz()->getNom(), 'max' => 100];
             $userPerformanceData[] = $score->getScore();
             $averageScoresData[] = $score->getScore() - rand(5, 15); // Moyenne simulée
         }
 
         // Récupère les quizzes non réussis
         $passedQuizIds = $scores->map(fn($score) => $score->getQuiz()->getIdquiz())->toArray();
         $availableQuizzesNotPassed = $entityManager->getRepository(Quiz::class)
             ->createQueryBuilder('q')
             ->where('q.idquiz NOT IN (:ids)')
             ->setParameter('ids', $passedQuizIds)
             ->getQuery()
             ->getResult();
 
         // Génère le prompt pour ChatGPT
         $prompt = $this->generateChatGptPrompt(
             $quizzesPassed,
             $totalQuizzesAvailable,
             $top3Scores,
             $quizCategories,
             $userPerformanceData,
             $averageScoresData,
             $availableQuizzesNotPassed
         );
 
         // Utilise le service ChatGPT pour générer un message


         $chatGptMessage = $chatGptService->generateMessage($prompt);

     
    
        $form = $this->createFormBuilder($user)
        ->add('nom', TextType::class, [
            'label' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'Last name is required']),
                new Assert\Length([
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => 'Last name must be at least {{ limit }} characters',
                    'maxMessage' => 'Last name cannot be longer than {{ limit }} characters'
                ])
            ]
        ])
        ->add('prenom', TextType::class, [
            'label' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'First name is required']),
                new Assert\Length([
                    'min' => 2,
                    'max' => 50,
                    'minMessage' => 'First name must be at least {{ limit }} characters',
                    'maxMessage' => 'First name cannot be longer than {{ limit }} characters'
                ])
            ]
        ])
        ->add('email', EmailType::class, [
            'label' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'Email is required']),
                new Assert\Email(['message' => 'Please enter a valid email']),
                new Assert\Length([
                    'max' => 180,
                    'maxMessage' => 'Email cannot be longer than {{ limit }} characters'
                ])
            ]
        ])
        ->add('numPhone', TextType::class, [
            'label' => false,
            'constraints' => [
                new Assert\NotBlank(['message' => 'Phone number is required']),
                new Assert\Regex([
                    'pattern' => '/^[0-9]{8}$/',
                    'message' => 'Phone number must contain 8 digits'
                ])
            ]
        ])
        ->add('dateNaissance', DateType::class, [
            'widget' => 'single_text',
            'required' => false,
            'constraints' => [
                new Assert\LessThan([
                    'value' => '-18 years',
                    'message' => 'You must be at least 18 years old'
                ])
            ]
        ])
        ->add('image_url', FileType::class, [
            'label' => 'Image (JPEG/PNG)',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new Assert\Image([
                    'mimeTypes' => ['image/jpeg', 'image/png'],
                    'mimeTypesMessage' => 'Only JPEG and PNG formats are accepted'
                ]),
                new Assert\File([
                    'maxSize' => '5M',
                    'maxSizeMessage' => 'The image cannot exceed 5MB'
                ])
            ]
        ])
        ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($user);
        
            $imageFile = $form->get('image_url')->getData();
            $imageErrors = [];
        
            if ($imageFile) {
                $imageErrors = $validator->validate($imageFile, [
                    new Assert\Image(['mimeTypes' => ['image/jpeg', 'image/png']]),
                    new Assert\File(['maxSize' => '5M', 'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG/PNG).']),
                ]);
        
                foreach ($imageErrors as $error) {
                    $form->get('image_url')->addError(new FormError($error->getMessage()));
                }
            }
        
            
            if (count($errors) === 0 && count($imageErrors) === 0) {
                if ($imageFile) {
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                    $imageFile->move($this->getParameter('kernel.project_dir') . '/public/images', $newFilename);
                    $user->setImageUrl('images/' . $newFilename);
                }
        
                $entityManager->persist($user);
                $entityManager->flush();
                $this->addFlash('success', 'Your profile has been updated successfully.');
             
            }
        }
        
    
        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'quizzesPassed' => $quizzesPassed,
            'totalQuizzesAvailable' => $totalQuizzesAvailable,
            'top3Scores' => $top3Scores,
            'quizCategories' => $quizCategories,
            'userPerformanceData' => $userPerformanceData,
            'averageScoresData' => $averageScoresData,
            'availableQuizzesNotPassed' => $availableQuizzesNotPassed,
            'chatGptMessage' => $chatGptMessage,
        ]);
    }
    
    private function generateChatGptPrompt(
        int $quizzesPassed,
        int $totalQuizzesAvailable,
        array $top3Scores,
        array $quizCategories,
        array $userPerformanceData,
        array $averageScoresData,
        array $availableQuizzesNotPassed
    ): string {
        // Prépare le prompt
        $top3QuizNames = array_map(fn($score) => $score->getQuiz()->getNom(), $top3Scores);
        $notPassedQuizNames = array_map(fn($quiz) => $quiz->getNom(), $availableQuizzesNotPassed);

        $prompt = "Based on the following quiz performance data:\n\n";
        $prompt .= "Quizzes Passed: $quizzesPassed out of $totalQuizzesAvailable\n";
        $prompt .= "Top 3 Quizzes (by score): " . implode(', ', $top3QuizNames) . "\n\n";

        $prompt .= "Performance in each quiz category (Quiz Name: Your Score vs. Average Score):\n";
        foreach ($quizCategories as $index => $category) {
            $prompt .= "- {$category['name']}: {$userPerformanceData[$index]} vs. {$averageScoresData[$index]}\n";
        }
        $prompt .= "\n";

        if (!empty($notPassedQuizNames)) {
            $prompt .= "To improve your performance, consider attempting the following quizzes you haven't passed yet: " . implode(', ', $notPassedQuizNames) . "\n\n";
        } else {
            $prompt .= "Congratulations! You have passed all available quizzes.\n\n";
        }

        $prompt .= "Please generate a concise and encouraging message for the user's profile page summarizing their performance and suggesting areas for improvement based on the data provided. The message should be friendly and motivating.";

        return $prompt;
    }



    
        
    #[Route('/inscrit', name: 'inscrit')]
    public function ajouter(Request $request, EntityManagerInterface $entityManager)
    {
        $user = new User();
        $form = $this->createForm(ForminscritType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('login');
        }
        else {
      
            $errors = [];
            foreach ($form->getErrors(true) as $error) {
                $errors[] = $error->getMessage();
            }
            
        }

        return $this->render('user/inscrit.html.twig', [
            'formB' => $form->createView(),
        ]);
    }
        

    
/**
 * @Route("/login", name="login", methods={"GET", "POST"})
 */
public function login(
    Request $request,
    EntityManagerInterface $entityManager,
    UserPasswordHasherInterface $passwordHasher,
    SessionInterface $session
): Response {
    $form = $this->createForm(LoginFormType::class);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $email = $form->get('email')->getData();
        $password = $form->get('password')->getData();

        $user = $entityManager->getRepository(User::class)
            ->findOneBy(['email' => $email]);

        if (!$user) {
            $this->addFlash('error', 'Aucun utilisateur trouvé avec cet email');
            return $this->redirectToRoute('login');
        }

        if (!$passwordHasher->isPasswordValid($user, $password)) {
            $this->addFlash('error', 'Mot de passe incorrect');
            return $this->redirectToRoute('login');
        }

        if ($user->getStatus() !== 'ACTIVE') {
            $this->addFlash('error', 'Compte désactivé');
            return $this->redirectToRoute('login');
        }

        $session->set('id', $user->getId());
        $session->set('role', $user->getRole());
        
        // Redirect all users to profile page
        return $this->redirectToRoute('profile');
    }

    return $this->render('user/login.html.twig', [
        'form' => $form->createView(),
        'error' => null
    ]);
}


    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $request)
    {
        // Détruire la session manuellement (facultatif)
        $session = $request->getSession();
        $session->invalidate();  
        $session->clear();       

        // Une fois la session détruite, tu peux rediriger l'utilisateur
        return $this->redirectToRoute('login');
    }



  

    #[Route('/GestionUsers', name: 'GestionUsers', methods: ['GET'])]
    public function index(
        UserRepository $userRepository,
        PaginatorInterface $paginator,
        SessionInterface $session,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        
        $query = $userRepository->createQueryBuilder('u')->getQuery();
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
        if ($user->getRole() !== 'ADMIN') {  
         
            return $this->render('user/admin/404.html.twig');
        }
        
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            3
        );
        

        return $this->render('user/admin/UsersManag.html.twig', [
            'user' => $user,
            'pagination' => $pagination
        ]);
    }

    

    #[Route('admin/user/{id}/details', name: 'admin_user_details', methods: ['GET'])]
    public function details(User $user): Response
    {
        return $this->render('user/admin/_details.html.twig', [
            'user' => $user,
        ]);
    }

/**
 * @Route("/admin/user/{id}/edit-modal", name="admin_user_edit_modal", methods={"GET"})
 */
public function editModal(int $id, Request $request, EntityManagerInterface $entityManager, SessionInterface $session): JsonResponse
{
    // Vérification de la session
    if (!$session->get('id')) {
        return $this->render('user/login.html.twig');
    }

    $userId = $session->get('id');
    $userS = $entityManager->getRepository(User::class)->find($userId);
    if (!$userS) {
        throw $this->createNotFoundException('User not found');
    }
    if ($userS->getRole() !== 'ADMIN') {
        return $this->render('user/admin/404.html.twig');
    }

    // Recherche de l'utilisateur à éditer
    $user = $entityManager->getRepository(User::class)->find($id);
    if (!$user) {
        return new JsonResponse(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
    }

    // Création du formulaire
    $form = $this->createFormBuilder($user, [
        'csrf_protection' => true,
        'csrf_token_id' => 'user_update',
    ])
    ->add('nom', TextType::class, [
        'label' => false,
        'constraints' => [
            new Assert\NotBlank(['message' => 'Le nom ne peut pas être vide.']),
            new Assert\Length(['min' => 2, 'minMessage' => 'Le nom doit contenir au moins {{ limit }} caractères.']),
        ],
    ])
    ->add('prenom', TextType::class, [
        'label' => false,
        'constraints' => [
            new Assert\NotBlank(['message' => 'Le prénom ne peut pas être vide.']),
            new Assert\Length(['min' => 2, 'minMessage' => 'Le prénom doit contenir au moins {{ limit }} caractères.']),
        ],
    ])
    ->add('email', EmailType::class, [
        'label' => false,
        'constraints' => [
            new Assert\NotBlank(['message' => 'L\'email ne peut pas être vide.']),
            new Assert\Email(['message' => 'L\'email {{ value }} n\'est pas valide.']),
        ],
    ])
    ->add('numPhone', TextType::class, [
        'label' => false,
        'constraints' => [
            new Assert\NotBlank(['message' => 'Le numéro de téléphone ne peut pas être vide.']),
        ],
    ])
    ->add('dateNaissance', DateType::class, [
        'widget' => 'single_text',
        'required' => false,
        'constraints' => [
            new Assert\Date(['message' => 'La date de naissance doit être au format valide.']),
        ],
    ])
    ->add('role', ChoiceType::class, [
        'choices' => UserRole::choices(),
        'label' => 'Role',
        'data' => $user->getRole(),
    ])
    ->add('status', ChoiceType::class, [
        'choices' => UserStatus::choices(),
        'label' => 'Status',
        'data' => $user->getStatus(),
    ])
    ->getForm();

    $form->handleRequest($request);
    $errors = [];

    if ($form->isSubmitted() && !$form->isValid()) {
        foreach ($form->getErrors(true) as $error) {
            $errors[$error->getOrigin()->getName()][] = $error->getMessage();
        }
    }

    // Renvoie le formulaire avec les erreurs
    return new JsonResponse([
        'form' => $this->renderView('user/admin/_edit_form.html.twig', ['form' => $form->createView()]),
        'errors' => $errors,
    ]);
}




/**
 * @Route("/admin/user/{id}/update", name="admin_user_update", methods={"POST"})
 */
public function update(int $id, Request $request, SessionInterface $session, 
    EntityManagerInterface $entityManager): Response
{
    if (!$session->get('id')) {
        return $this->render('user/login.html.twig');
    }

    $userId = $session->get('id');
    $userS = $entityManager->getRepository(User::class)->find($userId);
    if (!$userS || $userS->getRole() !== 'ADMIN') {
        return $this->render('user/admin/404.html.twig');
    }

    $user = $entityManager->getRepository(User::class)->find($id);
    if (!$user) {
        throw $this->createNotFoundException('User not found');
    }

    $form = $this->createFormBuilder($user, [
        'csrf_protection' => true,
        'csrf_token_id' => 'user_update',
    ])
    ->add('nom', TextType::class, [
        'label' => false,
        'empty_data' => '',
        'constraints' => [
            new Assert\NotBlank(['message' => 'First name is required']),
            new Assert\Length([
                'min' => 2,
                'max' => 50,
                'minMessage' => 'First name must be at least {{ limit }} characters',
                'maxMessage' => 'First name cannot be longer than {{ limit }} characters'
            ])
        ]
    ])
    ->add('prenom', TextType::class, [
        'label' => false,
        'empty_data' => '',
        'constraints' => [
            new Assert\NotBlank(['message' => 'Last name is required']),
            new Assert\Length([
                'min' => 2,
                'max' => 50,
                'minMessage' => 'Last name must be at least {{ limit }} characters',
                'maxMessage' => 'Last name cannot be longer than {{ limit }} characters'
            ])
        ]
    ])
    ->add('email', EmailType::class, [
        'label' => false,
        'empty_data' => '',
        'constraints' => [
            new Assert\NotBlank(['message' => 'Email is required']),
            new Assert\Email(['message' => 'Please enter a valid email']),
            new Assert\Length([
                'max' => 180,
                'maxMessage' => 'Email cannot be longer than {{ limit }} characters'
            ])
        ]
    ])
    ->add('numPhone', TextType::class, [
        'label' => false,
        'empty_data' => '0',
        'constraints' => [
            new Assert\NotBlank(['message' => 'Phone number is required']),
            new Assert\Regex([
                'pattern' => '/^[0-9]{8}$/',
                'message' => 'Phone number must contain 8 digits'
            ])
        ]
    ])
    ->add('dateNaissance', DateType::class, [
        'widget' => 'single_text',
        'label' => false,
        'empty_data' => '',
        'constraints' => [
            new Assert\LessThan([
                'value' => '-18 years',
                'message' => 'You must be at least 18 years old'
            ])
        ]
    ])
    ->add('role', ChoiceType::class, [
        'choices' => UserRole::choices(),
        'label' => 'Role',
        'mapped' => false,
    ])
    ->add('status', ChoiceType::class, [
        'choices' => UserStatus::choices(),
        'label' => 'Status',
        'mapped' => false,
    ])
    ->getForm();

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $roleString = $form->get('role')->getData();
        if (is_string($roleString)) {
            $user->setRole(UserRole::tryFrom($roleString));
        }

        $statusString = $form->get('status')->getData();
        if (is_string($statusString)) {
            $user->setStatus(UserStatus::tryFrom($statusString));
        }

        $entityManager->flush();

        return new JsonResponse(['success' => true]);
    }

    return new JsonResponse([
        'success' => false,
        'errors' => $this->getAllFormErrors($form),
    ], Response::HTTP_BAD_REQUEST);
}


private function getAllFormErrors($form): array
{
    $errors = [];
    foreach ($form->all() as $child) {
        foreach ($child->getErrors(true) as $error) {
            $errors[$child->getName()][] = $error->getMessage();
        }
    }
    return $errors;
}




  /**
     * @Route("/admin/user/{id}/delete", name="admin_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager, SessionInterface $session, CsrfTokenManagerInterface $csrfTokenManager): Response
    {

        if (!$session->get('id')) {
            return $this->render('user/login.html.twig');
        }
    
        $userId = $session->get('id');
        $userS = $entityManager->getRepository(User::class)->find($userId);
        if (!$userS) {
            throw $this->createNotFoundException('User not found');
        }
        if ($userS->getRole() !== 'ADMIN') {  
          
            return $this->render('user/admin/404.html.twig');
        }

        $token = new CsrfToken('delete' . $user->getId(), $request->request->get('_token')); // Crée un objet CsrfToken

        if (!$csrfTokenManager->isTokenValid($token)) { // Utilise l'objet CsrfToken
            return $this->redirectToRoute('GestionUsers');
        }

        $entityManager->remove($user);
        $entityManager->flush();

        $this->addFlash('success', 'Utilisateur supprimé avec succès.');

        return $this->redirectToRoute('GestionUsers');
    }
  
}