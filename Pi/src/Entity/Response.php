<?php

namespace App\Entity;

use App\Repository\ResponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResponseRepository::class)]
#[ORM\Table(name: 'response')]
class Response
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "idResponse", type: "integer")]
    private ?int $id = null;

    #[ORM\Column(name: "Response", type: "string", length: 255)]
    private ?string $text = null;

    #[ORM\Column(name: "isCorrect", type: "boolean")]
    private ?bool $isCorrect = false;

    #[ORM\ManyToOne(inversedBy: 'responses')]
    #[ORM\JoinColumn(name: 'idQuestion', referencedColumnName: 'idQuestion', nullable: false)]
    private ?Question $question = null;

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

    public function isCorrect(): ?bool
    {
        return $this->isCorrect;
    }

    public function setIsCorrect(bool $isCorrect): static
    {
        $this->isCorrect = $isCorrect;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): static
    {
        $this->question = $question;

        return $this;
    }
} 