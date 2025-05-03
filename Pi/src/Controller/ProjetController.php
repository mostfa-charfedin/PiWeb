<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Projet;
use App\Entity\Tache;
use App\Form\TacheType;
use App\Entity\User;
use App\Form\ProjetType;
use App\Repository\ProjetRepository;
use App\Repository\TacheRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use App\Service\ClaudeApiService;

class ProjetController extends AbstractController
{
    // Route for creating a new project
    #[Route('/new', name: 'projet_new')]
    public function new(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        
        $projet = new Projet();
        
        // If you need to associate the project with the current user
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        // Assuming Projet has a setUser method
       
        
        $form = $this->createForm(ProjetType::class, $projet);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($projet);
            $em->flush();
            
            // Redirecting to the list of projects after creation
            return $this->redirectToRoute('projet_list');
        }
        
        // Render the 'adminprojet.html.twig' template with the form
        return $this->render('integration/adminprojet.html.twig', [
            'formProjet' => $form->createView(), // Use 'formProjet' here to match the form name in the Twig template
            'user' => $user, // Pass the user to the template
            'edit_mode' => false
        ]);
    }
    
    // Route for listing all projects
    #[Route('/projet', name: 'projet_list')]
    public function list(ProjetRepository $projetRepository, SessionInterface $session, EntityManagerInterface $em): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');  // Redirect to login if not logged in
        }
        
        // Get the user from the session
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        $projets = $projetRepository->findAll();
        
        // If you want to filter projects by user, you can use:
        // $projets = $projetRepository->findBy(['user' => $user]);
        
        return $this->render('integration/adminlist.html.twig', [
            'projets' => $projets,
            'user' => $user,
        ]);
    }
    
/**
 * @Route("/pi/projet/{idProjet}", name="projet_show", requirements={"idProjet"="\d+"})
 */
public function show(
    int $idProjet,
    ProjetRepository $projetRepository,
    TacheRepository $tacheRepository, // inject Task repo
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $projet = $projetRepository->find($idProjet);

    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    // Get tasks for this project
    $taches = $tacheRepository->findBy(['idprojet' => $projet]);

    return $this->render('integration/adminshow.html.twig', [
        'projet' => $projet,
        'taches' => $taches,
        'user' => $user,
    ]);
}

    
    // Route for editing a project
    #[Route('/{idProjet}', name: 'projet_edit', requirements: ['idProjet' => '\d+'])]
    public function edit(Request $request, int $idProjet, ProjetRepository $projetRepository, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
        
        $userId = $session->get('id');
        $user = $em->getRepository(User::class)->find($userId);
        
        $projet = $projetRepository->find($idProjet);
        
        if (!$projet) {
            throw $this->createNotFoundException('Project not found');
        }
        
        $form = $this->createForm(ProjetType::class, $projet);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            
            return $this->redirectToRoute('projet_list');
        }
        
        return $this->render('integration/adminprojet.html.twig', [
            'formProjet' => $form->createView(),
            'user' => $user,
            'edit_mode' => true
        ]);
    }
    
    // Route for deleting a project
    #[Route('/projet/{idProjet}/delete', name: 'projet_delete', requirements: ['idProjet' => '\d+'])]
    public function delete(int $idProjet, ProjetRepository $projetRepository, EntityManagerInterface $em): Response
    {
        $projet = $projetRepository->find($idProjet);
        
        if (!$projet) {
            throw $this->createNotFoundException('Project not found');
        }
        
        $em->remove($projet);
        $em->flush();
        
        return $this->redirectToRoute('projet_list');
    }
    #[Route('/projet/{idProjet}/tache/new', name: 'tache_new')]
public function createTache(
    int $idProjet,
    Request $request,
    EntityManagerInterface $em,
    ProjetRepository $projetRepository,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $projet = $projetRepository->find($idProjet);
    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    $tache = new Tache();
    $tache->setIdprojet($projet);

    $form = $this->createForm(TacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->persist($tache);
        $em->flush();

        return $this->redirectToRoute('projet_show', ['idProjet' => $idProjet]);
    }

    return $this->render('integration/task_form.html.twig', [
        'formTache' => $form->createView(),
        'edit_mode' => false,
        'user' => $user,
        'projet' => $projet
    ]);
}
#[Route('/tache/{idTache}/edit', name: 'tache_edit')]
public function editTache(
    int $idTache,
    Request $request,
    EntityManagerInterface $em,
    TacheRepository $tacheRepository,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $tache = $tacheRepository->find($idTache);
    if (!$tache) {
        throw $this->createNotFoundException('Task not found');
    }

    $form = $this->createForm(TacheType::class, $tache);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em->flush();

        return $this->redirectToRoute('projet_show', [
            'idProjet' => $tache->getIdprojet()->getIdProjet()
        ]);
    }

    return $this->render('integration/task_form.html.twig', [
        'formTache' => $form->createView(),
        'edit_mode' => true,
        'user' => $user,
        'projet' => $tache->getIdprojet()
    ]);
}
#[Route('/tache/{idTache}/delete', name: 'tache_delete')]
public function deleteTache(
    int $idTache,
    TacheRepository $tacheRepository,
    EntityManagerInterface $em,
    SessionInterface $session
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $tache = $tacheRepository->find($idTache);
    if (!$tache) {
        throw $this->createNotFoundException('Task not found');
    }

    $projetId = $tache->getIdprojet()->getIdProjet();

    $em->remove($tache);
    $em->flush();

    return $this->redirectToRoute('projet_show', ['idProjet' => $projetId]);
}
#[Route('/mes-projets', name: 'user_projet_list')]
public function userProjetList(
    ProjetRepository $projetRepository,
    TacheRepository $tacheRepository,
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    // Fetch all tasks for the connected user
    $userTasks = $tacheRepository->findBy(['iduser' => $user]);

    // Get unique projects from these tasks
    $projects = [];
    foreach ($userTasks as $task) {
        $project = $task->getIdprojet();
        if ($project && !in_array($project, $projects, true)) {
            $projects[] = $project;
        }
    }

    return $this->render('integration/userlist.html.twig', [
        'projets' => $projects,
        'user' => $user,
    ]);
}

#[Route('/projet/{idProjet}/stats', name: 'projet_stats')]
public function stats(
    int $idProjet,
    ProjetRepository $projetRepository,
    TacheRepository $tacheRepository,
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $projet = $projetRepository->find($idProjet);
    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    $taches = $tacheRepository->findBy(['idprojet' => $projet]);
    $now = new \DateTime();

    $chartData = [];
    foreach ($taches as $tache) {
        $createdAt = $tache->getCreatedAt();
        $deadline = $tache->getDate() ? (clone $createdAt)->add(new \DateInterval('P' . $tache->getDate() . 'W')) : null;
        $completedAt = $tache->getCompletedAt();
        $isCompleted = $tache->getStatus() === 'done';

        $isEarly = $isCompleted && $completedAt && $deadline && $completedAt < $deadline;
        $isOverdue = false;

        if ($deadline) {
            if (!$isCompleted && $now > $deadline) {
                $isOverdue = true; // Not completed and past deadline
            } elseif ($isCompleted && $completedAt > $deadline) {
                $isOverdue = true; // Completed but late
            }
        }

        $chartData[] = [
            'task' => $tache->getTitre(),
            'start' => $createdAt?->format(\DateTime::ATOM), // Use ISO format for JS
            'end' => $deadline?->format(\DateTime::ATOM),
            'completedAt' => $completedAt?->format(\DateTime::ATOM),
            'status' => $tache->getStatus(),
            'weeks' => $tache->getDate(),
            'isEarly' => $isEarly,
            'isOverdue' => $isOverdue,
            'completionDelay' => $isCompleted && $deadline ? 
                (strtotime($completedAt->format('Y-m-d')) - strtotime($deadline->format('Y-m-d'))) / (60 * 60 * 24) : 0
        ];
    }

    return $this->render('integration/stats.html.twig', [
        'projet' => $projet,
        'chartData' => $chartData,
        'user' => $em->getRepository(User::class)->find($session->get('id'))
    ]);
}
/**
 * @Route("/projet/{idProjet}/tasks", name="user_projet_tasks", requirements={"idProjet"="\d+"})
 */
public function userTasksForProject(
    int $idProjet,
    TacheRepository $tacheRepository,
    ProjetRepository $projetRepository,
    SessionInterface $session,
    EntityManagerInterface $em
): Response {
    // Check if user is logged in
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    // Fetch the project by its ID
    $projet = $projetRepository->find($idProjet);
    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    // Fetch the tasks associated with the current user in the specific project
    $tasks = $tacheRepository->findBy(['idprojet' => $projet, 'iduser' => $user]);

    return $this->render('integration/user_show.html.twig', [
        'projet' => $projet,
        'tasks' => $tasks,
        'user' => $user
    ]);
}

#[Route('/projet/{idProjet}/rapport', name: 'projet_rapport')]
public function generateRapport(
    int $idProjet,
    ProjetRepository $projetRepository,
    TacheRepository $tacheRepository,
    SessionInterface $session,
    EntityManagerInterface $em
) {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $projet = $projetRepository->find($idProjet);
    if (!$projet) {
        throw $this->createNotFoundException('Project not found');
    }

    $taches = $tacheRepository->findBy(['idprojet' => $projet]);

    // Create HTML content using Twig
    $html = $this->renderView('integration/rapport.html.twig', [
        'projet' => $projet,
        'taches' => $taches,
        'user' => $user
    ]);

    // Setup Dompdf
    $pdfOptions = new Options();
    $pdfOptions->set('defaultFont', 'Arial');

    $dompdf = new Dompdf($pdfOptions);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Output PDF and immediately exit
    $dompdf->stream("rapport-{$projet->getTitre()}.pdf", [
        'Attachment' => true,
    ]);

    exit(0);
}
// In your controller
public function searchUsers(Request $request)
{
    $query = $request->query->get('query', '');

    $users = $this->getDoctrine()
        ->getRepository(User::class)
        ->createQueryBuilder('u')
        ->where('u.name LIKE :query')
        ->setParameter('query', '%' . $query . '%')
        ->getQuery()
        ->getResult();

    // Format the data to match the front-end expectations
    $formattedUsers = array_map(function($user) {
        return [
            'id' => $user->getId(),
            'label' => $user->getName(),
            'status' => $user->getStatus() // Example, adjust as needed
        ];
    }, $users);

    return $this->json($formattedUsers);
}
#[Route('/task/{id}', name: 'user_task_show', requirements: ['id' => '\d+'])]
public function showTask(
    int $id,
    TacheRepository $tacheRepository,
    EntityManagerInterface $em,
    SessionInterface $session
): Response {
    if (!$session->get('id')) {
        return $this->redirectToRoute('login');
    }

    $userId = $session->get('id');
    $user = $em->getRepository(User::class)->find($userId);

    $task = $tacheRepository->find($id);

    if (!$task) {
        throw $this->createNotFoundException('Task not found');
    }

    return $this->render('integration\user_task_show.html.twig', [
        'task' => $task,
        'user' => $user,
    ]);
}
#[Route('/task/{id}/done', name: 'task_mark_done', methods: ['POST'])]
public function markTaskDone(int $id, TacheRepository $tacheRepository, EntityManagerInterface $em, Request $request): Response
{
    $task = $tacheRepository->find($id);

    if (!$task) {
        throw $this->createNotFoundException('Task not found');
    }

    // Check CSRF Token
    if (!$this->isCsrfTokenValid('mark_done' . $task->getIdtache(), $request->request->get('_token'))) {
        throw $this->createAccessDeniedException('Invalid CSRF token');
    }

    $task->setStatus('done');
    $task->setCompletedAt(new \DateTime());

    $em->persist($task);
    $em->flush();

    return $this->redirectToRoute('user_task_show', ['id' => $task->getIdtache()]);
}

    
}
