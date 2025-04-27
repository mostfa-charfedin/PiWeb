<?php

namespace App\Repository;

use App\Entity\Score;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Score>
 */
class ScoreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Score::class);
    }


    // src/Repository/ScoreRepository.php
public function findWithFilters(?int $userId = null, ?int $quizId = null)
{
    $qb = $this->createQueryBuilder('s')
        ->leftJoin('s.user', 'u')
        ->leftJoin('s.quiz', 'q')
        ->addSelect('u', 'q');
    
    if ($userId) {
        $qb->andWhere('s.user = :user')
           ->setParameter('user', $userId);
    }
    
    if ($quizId) {
        $qb->andWhere('s.quiz = :quiz')
           ->setParameter('quiz', $quizId);
    }
    
    return $qb;
}

//    /**
//     * @return Score[] Returns an array of Score objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Score
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
