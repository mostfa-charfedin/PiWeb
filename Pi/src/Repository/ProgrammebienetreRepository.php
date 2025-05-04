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
    public function searchByTitle(string $title): array
    {
        return $this->createQueryBuilder('p')
            ->where('LOWER(p.titre) LIKE LOWER(:title)')
           
            ->setParameter('title', '%'.$title.'%')
            ->orderBy('p.titre', 'ASC')
            ->getQuery()
            ->getResult();
    }
    
   
}