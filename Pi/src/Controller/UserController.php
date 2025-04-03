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

        // Fetch user by email
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $user->getEmail()]);
        
        // If user doesn't exist or password is incorrect, show error
        if (!$user || $user->getPassword() !== $form->get('password')->getData()) {
            $this->addFlash('error', 'Invalid email or password.');
            return $this->redirectToRoute('login');  // Optional: keep the user on the login page after an error
        }

        // Store user info in session
        $session->set('id', $user->getId());
        $session->set('role', $user->getRoles());
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



    /**
     * @Route("/user/{id}", name="user_page")
     */
    public function userPage(EntityManagerInterface $entityManager,int $id, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        $element = $entityManager->getRepository(User::class)->find($id);
        return $this->render('user/profile.html.twig',[
            'element'=>$element,
        ]);
    }

    
 


    #[Route('', name: '')]
    public function index(SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
