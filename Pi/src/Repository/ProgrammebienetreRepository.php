<?php

namespace App\Repository;

use App\Entity\Programmebienetre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Programmebienetre>
 *
 * @method Programmebienetre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmebienetre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmebienetre[]    findAll()
 * @method Programmebienetre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammebienetreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmebienetre::class);
    }

    /**
     * Find programs by type
     */
    public function findByType(string $type): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.type = :type')
            ->setParameter('type', $type)
            ->orderBy('p.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find programs by administrator
     */
    public function findByAdmin(int $adminId): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.iduser = :adminId')
            ->setParameter('adminId', $adminId)
            ->orderBy('p.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search programs by title or description
     */
    public function searchPrograms(string $searchTerm): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.titre LIKE :searchTerm OR p.description LIKE :searchTerm')
            ->setParameter('searchTerm', '%'.$searchTerm.'%')
            ->orderBy('p.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get latest programs
     */
    public function findLatest(int $limit = 5): array
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.idprogramme', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get programs by type with admin details
     */
    public function findByTypeWithAdmin(string $type): array
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.iduser', 'u')
            ->addSelect('u')
            ->andWhere('p.type = :type')
            ->setParameter('type', $type)
            ->orderBy('p.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function save(Programmebienetre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Programmebienetre $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // /**
    //  * @return Programmebienetre[] Returns an array of Programmebienetre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Programmebienetre
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
} 