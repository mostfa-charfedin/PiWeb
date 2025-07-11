<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 * @ORM\Table(name="score")
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="User", inversedBy="scores")
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id", nullable=false)
     */
    private ?User $user = null;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz", nullable=false)
     */
    private ?Quiz $quiz = null;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $score = null;

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): static
    {
        $this->quiz = $quiz;
        return $this;
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
}