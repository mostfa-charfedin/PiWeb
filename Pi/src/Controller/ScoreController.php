<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ScoreRepository;
use App\Repository\UserRepository;
use App\Repository\QuizRepository;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Entity\User;

final class ScoreController extends AbstractController
{
    #[Route('/score', name: 'app_score')]
    public function index(
        Request $request,
        ScoreRepository $scoreRepository,
        UserRepository $userRepository,
        QuizRepository $quizRepository,
        PaginatorInterface $paginator, 
        SessionInterface $session, 
        EntityManagerInterface $entityManager,
    ): Response {
        // Authentication check
        if (!$session->get('id')) {
            return $this->redirectToRoute('login');
        }
    
        // Get current user
        $userS = $entityManager->getRepository(User::class)->find($session->get('id'));
        if (!$userS || $userS->getRole() !== 'ADMIN') { 
            return $this->render('user/admin/404.html.twig');
        }
        
        // Get filter parameters
        $quizId = $request->query->get('quiz');
        $userId = $request->query->get('user');
        $showTop5 = $request->query->get('top5');
        $searchTerm = $request->query->get('search');
    
        // Build base query with proper joins
        $queryBuilder = $scoreRepository->createQueryBuilder('s')
            ->leftJoin('s.user', 'u')  // Left join to include scores even if user is deleted
            ->leftJoin('s.quiz', 'q')  // Left join to include scores even if quiz is deleted
            ->addSelect('u', 'q')      // Select joined entities to avoid N+1 queries
            ->orderBy('s.score', 'DESC');
    
        // Apply filters
        if ($searchTerm) {
            $queryBuilder
                ->andWhere('u.nom LIKE :search OR u.email LIKE :search')
                ->setParameter('search', '%'.$searchTerm.'%');
        }
    
        if ($quizId) {
            $queryBuilder
                ->andWhere('q.idquiz = :quizId')
                ->setParameter('quizId', $quizId);
        }
    
        if ($userId) {
            $queryBuilder
                ->andWhere('u.id = :userId')
                ->setParameter('userId', $userId);
        }
    
        // Get dropdown data
        $quizzes = $quizRepository->findBy([], ['nom' => 'ASC']);
        $users = $userRepository->findBy([], ['nom' => 'ASC']);
    
        // Handle Top 5 case (without pagination)
        if ($showTop5 && $quizId) {
            $scores = $queryBuilder
                ->setMaxResults(5)
                ->getQuery()
                ->getResult();
    
            return $this->render('score/index.html.twig', [
                'scores' => $scores,
                'users' => $users,
                'quizzes' => $quizzes,
                'selectedQuiz' => $quizId,
                'selectedUser' => $userId,
                'showTop5' => true,
                'searchTerm' => $searchTerm,
                'user' => $userS,
                'isPaginated' => false,
            ]);
        }
    
       
    
        // Normal case with pagination - CRITICAL FIX HERE
        $pagination = $paginator->paginate(
            $queryBuilder, // Pass QueryBuilder directly (not getQuery())
            $request->query->getInt('page', 1), // Page number
            10, // Items per page
            [
                'distinct' => false,
                'wrap-queries' => true, // Essential for complex queries
                'useOutputWalkers' => true // Required for proper counting
            ]
        );
    
        return $this->render('score/index.html.twig', [
            'pagination' => $pagination,
            'users' => $users,
            'quizzes' => $quizzes,
            'selectedQuiz' => $quizId,
            'selectedUser' => $userId,
            'showTop5' => false,
            'searchTerm' => $searchTerm,
            'user' => $userS,
            'isPaginated' => true,
        ]);
    }
}