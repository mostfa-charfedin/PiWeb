<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuestionRepository::class)]
#[ORM\Table(name: "question")]
#[ApiResource]
class Question
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idQuestion", type: "integer")]
    #[Groups(['question:read'])]
    private ?int $id = null;

    #[ORM\Column(name: "Question", type: "string", length: 255)]
    #[Groups(['question:read'])]
    private ?string $text = null;

    #[ORM\ManyToOne(targetEntity: Quiz::class, inversedBy: 'questions')]
    #[ORM\JoinColumn(name: 'idQuiz', referencedColumnName: 'idQuiz', nullable: false)]
    #[Groups(['question:read'])]
    private ?Quiz $quiz = null;

    #[ORM\OneToMany(mappedBy: 'question', targetEntity: Response::class, orphanRemoval: true)]
    #[Groups(['question:read'])]
    private Collection $responses;

    public function __construct()
    {
        $this->responses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): static
    {
        $this->text = $text;
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

    /**
     * @return Collection<int, Response>
     */
    public function getResponses(): Collection
    {
        return $this->responses;
    }

    public function addResponse(Response $response): static
    {
        if (!$this->responses->contains($response)) {
            $this->responses->add($response);
            $response->setQuestion($this);
        }
        return $this;
    }

    public function removeResponse(Response $response): static
    {
        if ($this->responses->removeElement($response)) {
            // set the owning side to null (unless already changed)
            if ($response->getQuestion() === $this) {
                $response->setQuestion(null);
            }
        }
        return $this;
    }
}