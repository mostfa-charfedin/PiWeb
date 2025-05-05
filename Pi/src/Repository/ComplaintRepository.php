<?php
// src/Repository/ComplaintRepository.php
namespace App\Repository;

use App\Entity\Complaint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ComplaintRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Complaint::class);
    }
    public function getComplaintStats(): array
    {
        // Requête pour le total
        $total = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->getQuery()
            ->getSingleScalarResult();

        // Requête pour les résolues (status = true)
        $resolved = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.status = true')
            ->getQuery()
            ->getSingleScalarResult();

        // Requête pour les rejetées (status = false)
        $rejected = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.status = false')
            ->getQuery()
            ->getSingleScalarResult();

        // Requête pour les en attente (status IS NULL)
        $pending = $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->where('c.status IS NULL')
            ->getQuery()
            ->getSingleScalarResult();

        return [
            'total' => $total,
            'resolved' => $resolved,
            'rejected' => $rejected,
            'pending' => $pending,
            'resolved_percent' => $total > 0 ? round(($resolved / $total) * 100, 2) : 0,
            'rejected_percent' => $total > 0 ? round(($rejected / $total) * 100, 2) : 0,
            'pending_percent' => $total > 0 ? round(($pending / $total) * 100, 2) : 0,
        ];
    }
}