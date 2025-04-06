<?php

namespace App\Entity;

use App\Repository\QuizRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: QuizRepository::class)]
#[ORM\Table(name: "quiz")]
#[ApiResource]
class Quiz
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idQuiz", type: "integer")]
    #[Groups(['quiz:read'])]
    private ?int $id = null;

    #[ORM\Column(name: "nom", type: "string", length: 255)]
    #[Assert\NotBlank(message: "Le nom du quiz est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[\p{L}\s]+$/u",
        message: "Le nom ne peut contenir que des lettres et des espaces."
    )]
    #[Groups(['quiz:read'])]
    private ?string $name = null;

    #[ORM\Column(name: 'dateCreation', type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateCreation = null;

    #[ORM\OneToMany(mappedBy: 'quiz', targetEntity: Question::class, orphanRemoval: true)]
    private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): static
    {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->setQuiz($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getQuiz() === $this) {
                $question->setQuiz(null);
            }
        }

        return $this;
    }
}