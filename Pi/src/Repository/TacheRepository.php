<?php

namespace App\Repository;

use App\Entity\Tache;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tache>
 */
class TacheRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tache::class);
    }

    /**
     * @return Tache[] Returns an array of Task objects for a given project
     */
    public function findByProjet(int $projetId): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.idprojet = :projetId')
            ->setParameter('projetId', $projetId)
            ->orderBy('t.idtache', 'ASC')
            ->getQuery()
            ->getResult();
    }
}
