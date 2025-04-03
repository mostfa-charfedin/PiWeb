<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use SymfonyCasts\Bundle\ResetPassword\Model\ResetPasswordRequestInterface;

/**
 * @ORM\Table(name="reset_password_request")
 * @ORM\Entity(repositoryClass="App\Repository\ResetPasswordRequestRepository")
 */
class ResetPasswordRequest implements ResetPasswordRequestInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string")
     */
    private $selector;

    /**
     * @ORM\Column(type="string")
     */
    private $hashedToken;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $requestedAt;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private $expiresAt;

   

    public function __construct(object $user, string $selector, string $hashedToken, \DateTimeInterface $expiresAt)
    {
        $this->user = $user;
        $this->selector = $selector;
        $this->hashedToken = $hashedToken;
        $this->expiresAt = $expiresAt;
        $this->requestedAt = new \DateTimeImmutable();  // if you want to set the requestedAt on creation
    }
    
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): object
    {
        return $this->user;
    }

    public function getExpiresAt(): \DateTimeImmutable
    {
        return $this->expiresAt;
    }

    public function getHashedToken(): string
    {
        return $this->hashedToken;
    }

    public function getRequestedAt(): \DateTimeImmutable
    {
        return $this->requestedAt;
    }

    public function getSelector(): string
    {
        return $this->selector;
    }

    public function isExpired(): bool
    {
        return $this->expiresAt <= new \DateTimeImmutable('now');
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setUser(object $user): void
    {
        $this->user = $user;
    }

    public function setSelector(string $selector): void
    {
        $this->selector = $selector;
    }

    public function setHashedToken(string $hashedToken): void
    {
        $this->hashedToken = $hashedToken;
    }

    public function setRequestedAt(\DateTimeImmutable $requestedAt): void
    {
        $this->requestedAt = $requestedAt;
    }

    public function setExpiresAt(\DateTimeImmutable $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }
}