<?php

namespace App\Repository;

use App\Entity\Avis;
use App\Entity\User;
use App\Entity\Programmebienetre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avis>
 *
 * @method Avis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Avis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Avis[]    findAll()
 * @method Avis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    public function save(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Avis $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Avis[] Returns an array of Avis objects
     */
    public function findByProgramme(int $idprogramme): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.idprogramme = :idprogramme')
            ->setParameter('idprogramme', $idprogramme)
            ->orderBy('a.id', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findAllWithRelations(): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->leftJoin('a.programme', 'p')
            ->addSelect('u')
            ->addSelect('p')
            ->getQuery()
            ->getResult();
    }

    public function getRatingStatistics(): array
    {
        $qb = $this->createQueryBuilder('a')
            ->select('a.rating, COUNT(a.id) as count')
            ->groupBy('a.rating')
            ->orderBy('a.rating', 'ASC');

        $results = $qb->getQuery()->getResult();
        
        // Initialize counts for all ratings (1-5)
        $statistics = array_fill(1, 5, 0);
        
        // Fill in actual counts
        foreach ($results as $result) {
            $statistics[$result['rating']] = (int)$result['count'];
        }
        
        return array_values($statistics);
    }

    public function getAverageRating(): float
    {
        $result = $this->createQueryBuilder('a')
            ->select('AVG(a.rating) as average')
            ->getQuery()
            ->getSingleResult();
        
        return round($result['average'] ?? 0, 2);
    }

    public function getProgramStatistics(): array
    {
        return $this->createQueryBuilder('a')
            ->select('p.titre as programName', 
                    'COUNT(a.id) as reviewCount', 
                    'AVG(a.rating) as averageRating')
            ->leftJoin('a.programme', 'p')
            ->groupBy('p.idprogramme', 'p.titre')
            ->orderBy('reviewCount', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function getTotalUniqueReviewers(): int
    {
        return $this->createQueryBuilder('a')
            ->select('COUNT(DISTINCT a.user)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function hasUserReviewedProgram($user, $programme): bool
    {
        $result = $this->createQueryBuilder('a')
            ->andWhere('a.user = :user')
            ->andWhere('a.programme = :programme')
            ->setParameter('user', $user)
            ->setParameter('programme', $programme)
            ->getQuery()
            ->getOneOrNullResult();

        return $result !== null;
    }

    /**
     * Get program statistics (program name, number of reviews, average rating)
     * @return array
     */
    public function getProgramStats(): array
    {
        return $this->createQueryBuilder('a')
            ->select('p.titre as programName, COUNT(a.id) as reviewCount, AVG(a.rating) as averageRating')
            ->join('a.programme', 'p')
            ->groupBy('p.idprogramme')
            ->getQuery()
            ->getResult();
    }
} 