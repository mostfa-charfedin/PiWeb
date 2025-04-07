<?php

namespace App\Controller;
use App\Entity\User;
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
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Form\FormErrorIterator;


class UserController extends AbstractController
{

    #[Route('/profile', name: 'profile')]
    public function profile(Request $request, SessionInterface $session, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
    
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
    
        $form = $this->createFormBuilder($user)
            ->add('nom', TextType::class, ['label' => false])
            ->add('prenom', TextType::class, ['label' => false])
            ->add('email', EmailType::class, ['label' => false]) // Correction : utiliser EmailType pour validation auto
            ->add('numPhone', TextType::class, ['label' => false])
            ->add('dateNaissance', DateType::class, ['widget' => 'single_text', 'required' => false])
            ->add('image_url', FileType::class, [
                'label' => 'Image (JPEG/PNG)',
                'mapped' => false,
                'required' => false,
            ])
            ->getForm();
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted()) {
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
    
            // Empêcher la soumission en cas d'erreurs
            if (count($errors) === 0 && count($imageErrors) === 0 && $form->isValid()) {
                if ($imageFile) {
                    $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                    $imageFile->move($this->getParameter('kernel.project_dir') . '/public/images', $newFilename);
                    $user->setImageUrl('images/' . $newFilename);
                
    
                $entityManager->persist($user);
                $entityManager->flush();
                return $this->redirectToRoute('profile');
            }
            else{

            }
            }
        }
    
        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
         
        ]);
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
public function login(Request $request, SessionInterface $session, EntityManagerInterface $entityManager): Response
{
    $error = $request->getSession()->get('login_error');
    
    $user = new User();
    $form = $this->createForm(LoginformType::class, $user);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // Récupérer l'utilisateur par email
        $existingUser = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);

        // Vérifier l'existence et le mot de passe
        if (!$existingUser || $existingUser->getPassword() !== $form->get('password')->getData()) {
            $this->addFlash('error', 'Invalid email or password.');
            return $this->redirectToRoute('login');
        }

        // 🔒 Vérifier si le compte est bloqué
        if ($existingUser->getStatus() !== 'ACTIVE') {
            $this->addFlash('error', 'Your account is blocked.');
            return $this->redirectToRoute('login');
        }

        // ✅ Connexion réussie : stocker les infos en session
        $session->set('id', $existingUser->getId());
        $session->set('role', $existingUser->getRoles());

        return $this->redirectToRoute('profile');
    }

    return $this->render('user/login.html.twig', [
        'form' => $form->createView(),
        'error' => $error,
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
        $userId = $session->get('id');
        $user = $entityManager->getRepository(User::class)->find($userId);
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 
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
public function editModal(int $id, EntityManagerInterface $entityManager): JsonResponse
{
    $user = $entityManager->getRepository(User::class)->find($id);
    
    if (!$user) {
        return new JsonResponse(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
    }

    // Create the form with CSRF protection and token ID
    $form = $this->createFormBuilder($user, [
        'csrf_protection' => true,
        'csrf_token_id' => 'user_update',  // Ensure the CSRF token ID is the same as in the update route
    ])
        ->add('nom', TextType::class, ['label' => false])
        ->add('prenom', TextType::class, ['label' => false])
        ->add('email', EmailType::class, ['label' => false])
        ->add('numPhone', TextType::class, ['label' => false])
        ->add('dateNaissance', DateType::class, ['widget' => 'single_text', 'required' => false])
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

    // Handle form submission
    if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $user->setStatus($data['status']); 
        $user->setRole($data['role']); 
        $entityManager->flush();
    }

    // Render the form view for modal
    $formView = $form->createView();

    return new JsonResponse([
        'form' => $this->renderView('user/admin/_edit_form.html.twig', ['form' => $formView]),
    ]);
}




/**
 * @Route("/admin/user/{id}/update", name="admin_user_update", methods={"POST"})
 */
public function update(int $id, Request $request, EntityManagerInterface $entityManager): JsonResponse
{
    $user = $entityManager->getRepository(User::class)->find($id);
    if (!$user) {
        return new JsonResponse(['error' => 'User not found'], Response::HTTP_NOT_FOUND);
    }

    // CSRF Token validation should happen before processing
    if (!$this->isCsrfTokenValid('user_update', $request->get('_token'))) {
        return new JsonResponse(['error' => 'Invalid CSRF token'], Response::HTTP_FORBIDDEN);
    }

    $form = $this->createFormBuilder($user, [
        'csrf_protection' => true,
        'csrf_token_id' => 'user_update',
    ])
        ->add('nom', TextType::class)
        ->add('prenom', TextType::class)
        ->add('email', EmailType::class)
        ->add('numPhone', TextType::class)
        ->add('dateNaissance', DateType::class, [
            'widget' => 'single_text',
            'required' => false
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
        'error' => 'Invalid data',
        'details' => $this->getAllFormErrors($form),
    ], Response::HTTP_BAD_REQUEST);
}








private function getAllFormErrors(\Symfony\Component\Form\FormInterface $form): array
{
    $errors = [];

    foreach ($form->getErrors(true, true) as $error) {
        $origin = $error->getOrigin();
        $name = $origin?->getName() ?? 'form';
        $errors[$name][] = $error->getMessage();
    }

    return $errors;
}




  /**
     * @Route("/admin/user/{id}/delete", name="admin_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager, CsrfTokenManagerInterface $csrfTokenManager): Response
    {
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
