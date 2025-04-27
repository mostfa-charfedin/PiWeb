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

final class ScoreController extends AbstractController
{
    #[Route('/score', name: 'app_score')]
    public function index(
        Request $request,
        ScoreRepository $scoreRepository,
        UserRepository $userRepository,
        QuizRepository $quizRepository,
        PaginatorInterface $paginator
    ): Response {
        // Retrieve filter parameters
        $userId = $request->query->get('user');
        $quizId = $request->query->get('quiz');
        
        // Create the base query with filters
        $queryBuilder = $scoreRepository->createQueryBuilder('s')
            ->leftJoin('s.user', 'u')
            ->leftJoin('s.quiz', 'q')
            ->addSelect('u', 'q');
        
        // Apply user filter
        if ($userId) {
            $queryBuilder->andWhere('s.user = :user')
                ->setParameter('user', $userId);
        }

        // Apply quiz filter
        if ($quizId) {
            $queryBuilder->andWhere('s.quiz = :quiz')
                ->setParameter('quiz', $quizId);
        }

        // Execute pagination with output walkers enabled
        $pagination = $paginator->paginate(
            $queryBuilder, // Use the query builder directly
            $request->query->getInt('page', 1), // Page number (default to 1)
            10, // Items per page
            [
                'distinct' => true, // Enable distinct query
                'useOutputWalkers' => true // Enable output walkers
            ]
        );

        // Retrieve users and quizzes for dropdowns
        $users = $userRepository->findAll();
        $quizzes = $quizRepository->findAll();

        return $this->render('score/index.html.twig', [
            'pagination' => $pagination,
            'users' => $users,
            'quizzes' => $quizzes,
            'selectedUser' => $userId,
            'selectedQuiz' => $quizId,
        ]);
    }
}

