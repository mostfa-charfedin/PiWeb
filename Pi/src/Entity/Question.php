<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reponse;
use App\Entity\Quiz;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 * @ORM\Table(name="question")
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="idQuestion", type="integer")
     */
    private $idQuestion;

    /**
     * @ORM\Column(name="Question", type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity=Quiz::class, inversedBy="questions")
     * @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz", nullable=false, onDelete="CASCADE")
     */
    private $quiz;

    /**
     * @ORM\OneToMany(targetEntity=Reponse::class, mappedBy="question", cascade={"persist", "remove"}, orphanRemoval=true)
     */
    private $reponses;

    public function __construct()
    {
        $this->reponses = new ArrayCollection();
    }

    public function getIdQuestion(): ?int
    {
        return $this->idQuestion;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function getQuiz(): ?Quiz
    {
        return $this->quiz;
    }

    public function setQuiz(?Quiz $quiz): self
    {
        $this->quiz = $quiz;
        return $this;
    }

    /**
     * @return Collection|Reponse[]
     */
    public function getReponses(): Collection
    {
        return $this->reponses;
    }

    public function addReponse(Reponse $reponse): self
    {
        if (!$this->reponses->contains($reponse)) {
            $this->reponses[] = $reponse;
            $reponse->setQuestion($this);
        }

        return $this;
    }

    public function removeReponse(Reponse $reponse): self
    {
        if ($this->reponses->removeElement($reponse)) {
            // Set the owning side to null (unless already changed)
            if ($reponse->getQuestion() === $this) {
                $reponse->setQuestion(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return (string) $this->question;
    }
}
