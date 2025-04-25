<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ScoreRepository::class)]
class Score
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?float $score = null;


   

    #[ORM\ManyToOne(inversedBy: 'idUser')]
    private ?User $idUser = null;

    #[ORM\ManyToOne(inversedBy: 'idQuiz')]
    private ?Quiz $IdQuiz = null;

    

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(?float $score): static
    {
        $this->score = $score;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->idUser;
    }

    public function setUser(?User $idUser): static
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdQuiz(): ?Quiz
    {
        return $this->IdQuiz;
    }

    public function setIdQuiz(?Quiz $IdQuiz): static
    {
        $this->IdQuiz = $IdQuiz;

        return $this;
    }
}
