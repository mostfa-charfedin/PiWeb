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
    public function findScoresByUser($userId)
{
    return $this->createQueryBuilder('s')
        ->andWhere('s.user = :user')
        ->setParameter('user', $userId)
        ->orderBy('s.idScore', 'DESC')  // Order by score id, change as necessary
        ->getQuery()
        ->getResult();
}
public function findHighestScoreForQuiz($quizId)
{
    return $this->createQueryBuilder('s')
        ->andWhere('s.quiz = :quiz')
        ->setParameter('quiz', $quizId)
        ->orderBy('s.score', 'DESC')
        ->setMaxResults(1)
        ->getQuery()
        ->getOneOrNullResult();
}
public function findAverageScoreForQuiz($quizId)
{
    return $this->createQueryBuilder('s')
        ->select('AVG(s.score)')
        ->andWhere('s.quiz = :quiz')
        ->setParameter('quiz', $quizId)
        ->getQuery()
        ->getSingleScalarResult();
}


    /**
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