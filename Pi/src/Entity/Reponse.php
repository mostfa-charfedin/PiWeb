<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity]
#[ORM\Table(name: "reponse")]
#[ORM\Index(columns: ["idQuestion"], name: "idQuestion")]
#[ApiResource]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "idReponse", type: "integer", nullable: false)]
    #[Groups(['reponse:read'])]
    private ?int $idreponse = null;

    #[ORM\Column(name: "Response", type: "string", length: 255, nullable: true, options: ["default" => "NULL"])]
    #[Groups(['reponse:read'])]
    private ?string $response = 'NULL';

    #[ORM\Column(name: "status", type: "string", length: 255, nullable: true, options: ["default" => "NULL"])]
    #[Groups(['reponse:read'])]
    private ?string $status = 'NULL';

    #[ORM\ManyToOne(targetEntity: Question::class, inversedBy: "reponses")]
    #[ORM\JoinColumn(name: "idQuestion", referencedColumnName: "idQuestion", nullable: false)]
    #[Groups(['reponse:read'])]
    private ?Question $question = null;

    #[ORM\ManyToMany(targetEntity: Question::class, mappedBy: "reponses")]
    private Collection $questions;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
    }

    // Getters and Setters
    public function getIdreponse(): ?int
    {
        return $this->idreponse;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(?string $response): self
    {
        $this->response = $response;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;
        return $this;
    }

    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
        }
        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        $this->questions->removeElement($question);
        return $this;
    }
}