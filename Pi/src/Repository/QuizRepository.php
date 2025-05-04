<?php

namespace App\Repository;

use App\Entity\Quiz;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Quiz>
 */
class QuizRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quiz::class);
    }

    /**
     * @param string|null $search Quiz title or quizzer name
     * @return Quiz[]
     */
    public function searchByTitle(string $title): array
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.nom LIKE :title')
            ->setParameter('title', '%' . $title . '%')
            ->orderBy('q.datecreation', 'DESC')
            ->getQuery()
            ->getResult();
    }
    
} 