<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
//use Doctrine\Common\Collections\ArrayCollection;
//use Doctrine\Common\Collections\Collection;
use App\Entity\Question;

#[ORM\Entity(repositoryClass: "App\Repository\QuizRepository")]
#[ORM\Table(name: "quiz")]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "idQuiz", type: "integer")]
    private $idquiz;

    

    #[ORM\Column(name: "nom", type: "string", length: 255, nullable: true)]
    private ?string $nom = null;
    

    #[ORM\Column(name: "dateCreation", type: "datetime", nullable: true)]
    private ?\DateTimeInterface $datecreation = null;
    
    #[ORM\OneToMany(targetEntity: Question::class, mappedBy: "quiz", orphanRemoval: true, cascade: ["persist", "remove"])]
    private Collection $questions;




    #[ORM\OneToMany(mappedBy: 'idQuiz', targetEntity: Score::class, orphanRemoval: true)]
    private Collection $scores;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->scores = new ArrayCollection();
    }

    public function getIdquiz(): ?int
    {
        return $this->idquiz;
    }

    public function getNom(): ?string
    {
        return $this->nom ?? '';
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;
        return $this;
    }

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setQuiz($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            if ($question->getQuiz() === $this) {
                $question->setQuiz(null);
            }
        }

        return $this;
    }

/**
     * @return Collection<int, Score>
     */
    public function getScores(): Collection
    {
        return $this->scores;
    }

    public function addScore(Score $score): static
    {
        if (!$this->scores->contains($score)) {
            $this->scores[] = $score;
            $score->setQuiz($this);
        }

        return $this;
    }

    public function removeScore(Score $score): static
    {
        if ($this->scores->removeElement($score)) {
            // set the owning side to null (unless already changed)
            if ($score->getQuiz() === $this) {
                $score->setQuiz(null);
            }
        }

        return $this;
    }
}
