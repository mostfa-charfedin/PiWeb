<?php

namespace App\Controller;

use App\Entity\Ressources;
use App\Entity\User;
use App\Form\RessourcesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

#[Route('/ressources')]
class RessourcesController extends AbstractController
{
    #[Route('', name: 'app_ressources_index', methods: ['GET'])]
    public function index(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $em->getRepository(User::class)->find($session->get('id'));

        // If user is not an admin, redirect to user-specific resources page
        if ($user->getRole() !== 'ADMIN') {
            return $this->redirectToRoute('app_user_ressources_index');
        }

        // Get search filter criteria from query parameters
        $searchTitle = $request->query->get('searchTitle');
        $type = $request->query->get('type');
        $searchDescription = $request->query->get('searchDescription');
        
        // Get pagination parameters
        $page = $request->query->getInt('page', 1);
        $itemsPerPage = 5; // Number of resources per page

        // Create the base query to filter resources
        $queryBuilder = $em->getRepository(Ressources::class)->createQueryBuilder('r');

        // Apply Title filter if it's set
        if ($searchTitle) {
            $queryBuilder->andWhere('r.titre LIKE :searchTitle')
                         ->setParameter('searchTitle', '%' . $searchTitle . '%');
        }

        // Apply Type filter if it's set
        if ($type) {
            $queryBuilder->andWhere('r.type = :type')
                         ->setParameter('type', $type);
        }

        // Apply Description filter if it's set
        if ($searchDescription) {
            $queryBuilder->andWhere('r.description LIKE :searchDescription')
                         ->setParameter('searchDescription', '%' . $searchDescription . '%');
        }

        // Get total count for pagination
        $totalItems = $queryBuilder->getQuery()->getResult();
        $totalItems = count($totalItems);
        $totalPages = ceil($totalItems / $itemsPerPage);

        // Apply pagination
        $queryBuilder->setFirstResult(($page - 1) * $itemsPerPage)
                    ->setMaxResults($itemsPerPage);

        // Execute the query
        $ressources = $queryBuilder->getQuery()->getResult();

        // Check if it's an AJAX request
        if ($request->isXmlHttpRequest()) {
            $ressourcesArray = [];
            foreach ($ressources as $ressource) {
                $ressourcesArray[] = [
                    'id' => $ressource->getIdresource(),
                    'titre' => $ressource->getTitre(),
                    'type' => $ressource->getType(),
                    'description' => $ressource->getDescription(),
                    'noteaverage' => $ressource->getNoteaverage(),
                    'csrfToken' => $this->container->get('security.csrf.token_manager')->getToken('delete' . $ressource->getIdresource())->getValue(),
                ];
            }
            return $this->json([
                'ressources' => $ressourcesArray,
                'count' => count($ressources),
                'pagination' => [
                    'currentPage' => $page,
                    'totalPages' => $totalPages,
                    'totalItems' => $totalItems
                ]
            ]);
        }

        // Return the filtered results to the view for non-AJAX requests
        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
            'user' => $user,
            'pagination' => [
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'totalItems' => $totalItems,
                'itemsPerPage' => $itemsPerPage
            ],
            'filters' => [
                'searchTitle' => $searchTitle,
                'type' => $type,
                'searchDescription' => $searchDescription
            ]
        ]);
    }

    #[Route('/user', name: 'app_user_ressources_index', methods: ['GET'])]
    public function userIndex(Request $request, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $em->getRepository(User::class)->find($session->get('id'));

        // Get search filter criteria from query parameters
        $searchTitle = $request->query->get('searchTitle');
        $type = $request->query->get('type');
        $searchDescription = $request->query->get('searchDescription');
        
        // Get pagination parameters
        $page = $request->query->getInt('page', 1);
        $itemsPerPage = 5; // Number of resources per page

        // Create the base query to filter resources
        $queryBuilder = $em->getRepository(Ressources::class)->createQueryBuilder('r');

        // Apply Title filter if it's set
        if ($searchTitle) {
            $queryBuilder->andWhere('r.titre LIKE :searchTitle')
                         ->setParameter('searchTitle', '%' . $searchTitle . '%');
        }

        // Apply Type filter if it's set
        if ($type) {
            $queryBuilder->andWhere('r.type = :type')
                         ->setParameter('type', $type);
        }

        // Apply Description filter if it's set
        if ($searchDescription) {
            $queryBuilder->andWhere('r.description LIKE :searchDescription')
                         ->setParameter('searchDescription', '%' . $searchDescription . '%');
        }

        // Get total count for pagination
        $totalItems = $queryBuilder->getQuery()->getResult();
        $totalItems = count($totalItems);
        $totalPages = ceil($totalItems / $itemsPerPage);

        // Apply pagination
        $queryBuilder->setFirstResult(($page - 1) * $itemsPerPage)
                    ->setMaxResults($itemsPerPage);

        // Execute the query
        $ressources = $queryBuilder->getQuery()->getResult();

        // Check if it's an AJAX request
        if ($request->isXmlHttpRequest()) {
            $ressourcesArray = [];
            foreach ($ressources as $ressource) {
                $ressourcesArray[] = [
                    'id' => $ressource->getIdresource(),
                    'titre' => $ressource->getTitre(),
                    'type' => $ressource->getType(),
                    'description' => $ressource->getDescription(),
                    'noteaverage' => $ressource->getNoteaverage(),
                    'csrfToken' => $this->container->get('security.csrf.token_manager')->getToken('delete' . $ressource->getIdresource())->getValue(),
                ];
            }
            return $this->json([
                'ressources' => $ressourcesArray,
                'count' => count($ressources),
                'pagination' => [
                    'currentPage' => $page,
                    'totalPages' => $totalPages,
                    'totalItems' => $totalItems
                ]
            ]);
        }

        // Return the filtered results to the user-specific view
        return $this->render('user/ressources/index.html.twig', [
            'ressources' => $ressources,
            'user' => $user,
            'pagination' => [
                'currentPage' => $page,
                'totalPages' => $totalPages,
                'totalItems' => $totalItems,
                'itemsPerPage' => $itemsPerPage
            ],
            'filters' => [
                'searchTitle' => $searchTitle,
                'type' => $type,
                'searchDescription' => $searchDescription
            ]
        ]);
    }

    // New resource creation route

    #[Route('/new', name: 'app_ressources_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Check if user is logged in, if not redirect to login page
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        
        // If user is not an admin, redirect to user-specific new resource page
        if ($user->getRole() !== 'ADMIN') {
            return $this->redirectToRoute('app_user_ressources_new');
        }

        $ressource = new Ressources();
        $ressource->setId($user);

        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($ressource);
                $entityManager->flush();
                $this->addFlash('success', 'Resource created successfully!');
                return $this->redirectToRoute('app_ressources_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while creating the resource. Please try again.');
            }
        }

        return $this->render('ressources/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    #[Route('/user/new', name: 'app_user_ressources_new', methods: ['GET', 'POST'])]
    public function userNew(Request $request, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        // Check if user is logged in, if not redirect to login page
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        
        $ressource = new Ressources();
        $ressource->setId($user);

        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $entityManager->persist($ressource);
                $entityManager->flush();
                $this->addFlash('success', 'Resource created successfully!');
                return $this->redirectToRoute('app_user_ressources_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'An error occurred while creating the resource. Please try again.');
            }
        }

        return $this->render('user/ressources/new.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    // Show resource details route

    #[Route('/{idresource}', name: 'app_ressources_show', methods: ['GET'])]
    public function show(Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $em->getRepository(User::class)->find($session->get('id'));

        // If user is not an admin, redirect to user-specific show page
        if ($user->getRole() !== 'ADMIN') {
            return $this->redirectToRoute('app_user_ressources_show', ['idresource' => $ressource->getIdresource()]);
        }

        // Prepare resource data for QR code
        $resourceData = [
            'title' => $ressource->getTitre(),
            'type' => $ressource->getType(),
            'description' => $ressource->getDescription(),
            'rating' => number_format($ressource->getNoteaverage(), 1) . '/10',
            'link' => $ressource->getLien() ?: 'No link available',
            'url' => $this->generateUrl('app_ressources_show', ['idresource' => $ressource->getIdresource()], UrlGeneratorInterface::ABSOLUTE_URL)
        ];

        return $this->render('ressources/show.html.twig', [
            'ressource' => $ressource,
            'user' => $user,
            'resource_data' => json_encode($resourceData)
        ]);
    }

    #[Route('/user/{idresource}', name: 'app_user_ressources_show', methods: ['GET'])]
    public function userShow(Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        // Retrieve the logged-in user from session
        $user = $em->getRepository(User::class)->find($session->get('id'));

        // Prepare resource data for QR code
        $resourceData = [
            'title' => $ressource->getTitre(),
            'type' => $ressource->getType(),
            'description' => $ressource->getDescription(),
            'rating' => number_format($ressource->getNoteaverage(), 1) . '/10',
            'link' => $ressource->getLien() ?: 'No link available',
            'url' => $this->generateUrl('app_user_ressources_show', ['idresource' => $ressource->getIdresource()], UrlGeneratorInterface::ABSOLUTE_URL)
        ];

        return $this->render('user/ressources/show.html.twig', [
            'ressource' => $ressource,
            'user' => $user,
            'resource_data' => json_encode($resourceData)
        ]);
    }

    #[Route('/{idresource}/edit', name: 'app_ressources_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ressources $ressource, EntityManagerInterface $entityManager, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $entityManager->getRepository(User::class)->find($session->get('id'));
        
        // Ensure the resource belongs to the current user
        if ($ressource->getId() !== $user) {
            $this->addFlash('error', 'You do not have permission to edit this resource.');
            return $this->redirectToRoute('app_ressources_index');
        }
        
        $form = $this->createForm(RessourcesType::class, $ressource);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'Resource updated successfully!');
                    return $this->redirectToRoute('app_ressources_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'An error occurred while updating the resource. Please try again.');
                }
            } else {
                $this->addFlash('error', 'Please correct the errors in the form.');
            }
        }

        return $this->render('ressources/edit.html.twig', [
            'form' => $form->createView(),
            'ressource' => $ressource,
            'user' => $user,
        ]);
    }

    #[Route('/{idresource}/delete', name: 'app_ressources_delete', methods: ['POST'])]
    public function delete(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        $user = $em->getRepository(User::class)->find($session->get('id'));
        
        // Ensure the resource belongs to the current user
        if ($ressource->getId() !== $user) {
            $this->addFlash('error', 'You do not have permission to delete this resource.');
            return $this->redirectToRoute('app_user_ressources_index');
        }

        if ($this->isCsrfTokenValid('delete'.$ressource->getIdresource(), $request->getPayload()->getString('_token'))) {
            // First, delete all related favorites
            $favorites = $em->getRepository('App\Entity\Favoris')->findBy(['idresource' => $ressource]);
            foreach ($favorites as $favorite) {
                $em->remove($favorite);
            }
            
            // Then delete the resource
            $em->remove($ressource);
            $em->flush();
            $this->addFlash('success', 'Resource deleted successfully!');
        }

        return $this->redirectToRoute('app_user_ressources_index');
    }
     // Rate resource route

    #[Route('/{idresource}/rate', name: 'app_ressources_rate', methods: ['POST'])]
    public function rate(Request $request, Ressources $ressource, EntityManagerInterface $em, SessionInterface $session): Response
    {
        if (!$session->get('id')) {
            return $this->json(['success' => false, 'message' => 'You must be logged in to rate a resource.']);
        }

        $rating = $request->request->get('rating');
        if ($rating === null) {
            return $this->json(['success' => false, 'message' => 'Rating value is required.']);
        }
        if (!is_numeric($rating)) {
            return $this->json(['success' => false, 'message' => 'Rating must be a number.']);
        }
        if ($rating < 0 || $rating > 10) {
            return $this->json(['success' => false, 'message' => 'Rating must be between 0 and 10.']);
        }

        try {
            $user = $em->getRepository(User::class)->find($session->get('id'));

            // Create new evaluation
            $evaluation = new Evaluation();
            $evaluation->setNote((int)round($rating));
            $evaluation->setDateEvaluation(new \DateTime());
            $evaluation->setRessource($ressource);
            $evaluation->setUser($user);
            $evaluation->setId($user->getId());
            $evaluation->setIdResource($ressource->getIdresource());

            // Calculate new average
            $evaluations = $ressource->getEvaluations();
            $totalRatings = count($evaluations) + 1;
            $sumRatings = array_sum(array_map(fn($e) => $e->getNote(), $evaluations->toArray())) + $evaluation->getNote();
            $newAverage = $sumRatings / $totalRatings;

            // Update resource average
            $ressource->setNoteaverage($newAverage);

            // Save changes
            $em->persist($evaluation);
            $em->flush();

            return $this->json([
                'success' => true, 
                'message' => 'Rating submitted successfully!',
                'newAverage' => $newAverage
            ]);
        } catch (\Exception $e) {
            return $this->json([
                'success' => false, 
                'message' => 'An error occurred while saving your rating. Please try again.'
            ]);
        }
    }

    #[Route('/{idresource}/export-pdf', name: 'app_ressources_export_pdf', methods: ['GET'])]
    public function exportPdf(Ressources $ressource, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        try {
            // Create new PDF instance
            $dompdf = new \Dompdf\Dompdf();
            
            // Set options
            $dompdf->set_option('defaultFont', 'Arial');
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isPhpEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Generate the HTML for the PDF
            $html = $this->renderView('ressources/pdf_template.html.twig', [
                'ressource' => $ressource,
            ]);

            // Load HTML to Dompdf
            $dompdf->loadHtml($html);

            // Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            // Generate a unique filename
            $filename = sprintf('resource-%d-%s.pdf', $ressource->getIdresource(), date('Y-m-d'));

            // Stream the file to the browser
            return new Response(
                $dompdf->output(),
                Response::HTTP_OK,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
            );
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while generating the PDF: ' . $e->getMessage());
            return $this->redirectToRoute('app_ressources_show', ['idresource' => $ressource->getIdresource()]);
        }
    }

    #[Route('/user/{idresource}/export-pdf', name: 'app_user_ressources_export_pdf', methods: ['GET'])]
    public function userExportPdf(Ressources $ressource, SessionInterface $session): Response
    {
        // Check if user is logged in
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }

        try {
            // Create new PDF instance
            $dompdf = new \Dompdf\Dompdf();
            
            // Set options
            $dompdf->set_option('defaultFont', 'Arial');
            $dompdf->set_option('isHtml5ParserEnabled', true);
            $dompdf->set_option('isPhpEnabled', true);
            $dompdf->set_option('isRemoteEnabled', true);

            // Generate the HTML for the PDF
            $html = $this->renderView('user/ressources/pdf_template.html.twig', [
                'ressource' => $ressource,
            ]);

            // Load HTML to Dompdf
            $dompdf->loadHtml($html);

            // Setup the paper size and orientation
            $dompdf->setPaper('A4', 'portrait');

            // Render the HTML as PDF
            $dompdf->render();

            // Generate a unique filename
            $filename = sprintf('resource-%d-%s.pdf', $ressource->getIdresource(), date('Y-m-d'));

            // Stream the file to the browser
            return new Response(
                $dompdf->output(),
                Response::HTTP_OK,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
                ]
            );
        } catch (\Exception $e) {
            $this->addFlash('error', 'An error occurred while generating the PDF: ' . $e->getMessage());
            return $this->redirectToRoute('app_user_ressources_show', ['idresource' => $ressource->getIdresource()]);
        }
    }
}
