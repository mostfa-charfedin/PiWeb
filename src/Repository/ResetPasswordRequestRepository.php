<?php

namespace App\Repository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\ResetPasswordRequest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SymfonyCasts\Bundle\ResetPassword\Persistence\ResetPasswordRequestRepositoryInterface;

/**
 * @extends ServiceEntityRepository<ResetPasswordRequest>
 *
 * @method ResetPasswordRequest|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResetPasswordRequest|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResetPasswordRequest[]    findAll()
 * @method ResetPasswordRequest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResetPasswordRequestRepository extends ServiceEntityRepository implements ResetPasswordRequestRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ResetPasswordRequest::class);
    }

    public function createResetPasswordRequest(object $user, \DateTimeInterface $expiresAt, string $selector, string $hashedToken): ResetPasswordRequest
    {
        $resetPasswordRequest = new ResetPasswordRequest($user, $selector, $hashedToken, $expiresAt);

    
        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();
    
        return $resetPasswordRequest;
    }
    

    public function findResetPasswordRequest(string $selector): ?ResetPasswordRequest
    {
        return $this->findOneBy(['selector' => $selector]);
    }

    public function getMostRecentNonExpiredResetPasswordRequest(object $user): ?ResetPasswordRequest
    {
        return $this->findOneBy([
            'user' => $user,
            'expiresAt' => new \DateTimeImmutable('now'),
        ], [
            'requestedAt' => 'DESC',
        ]);
    }

    public function removeResetPasswordRequest(object $resetPasswordRequest): void
    {
        $this->getEntityManager()->remove($resetPasswordRequest);
        $this->getEntityManager()->flush();
    }

    public function getUserIdentifier(object $user): string
    {
        return $user->getId();
    }

    public function persistResetPasswordRequest(object $resetPasswordRequest): void
    {
        $this->getEntityManager()->persist($resetPasswordRequest);
        $this->getEntityManager()->flush();
    }

    public function getMostRecentNonExpiredRequestDate(object $user): ?\DateTimeImmutable
    {
        $request = $this->findOneBy([
            'user' => $user,
            'expiresAt' => new \DateTimeImmutable('now'),
        ], [
            'requestedAt' => 'DESC',
        ]);

        return $request ? $request->getRequestedAt() : null;
    }

    public function findByUserAndSelector(object $user, string $selector): ?object
    {
        return $this->findOneBy([
            'user' => $user,
            'selector' => $selector,
        ]);
    }

    public function removeExpiredResetPasswordRequests(): int
    {
        return $this->createQueryBuilder('r')
            ->delete()
            ->where('r.expiresAt <= :dateTime')
            ->setParameter('dateTime', new \DateTimeImmutable('now'))
            ->getQuery()
            ->execute();
    }
}