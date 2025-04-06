<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity]
#[ORM\Table(name: "reponse")]
#[ApiResource]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")]
    #[ORM\Column(name: "id", type: "integer")]
    #[Groups(['reponse:read'])]
    private ?int $id = null;

    #[ORM\Column(name: "response", type: "string", length: 255, nullable: true)]
    #[Groups(['reponse:read'])]
    private ?string $response = null;

    #[ORM\Column(name: "status", type: "string", length: 255, nullable: true)]
    #[Groups(['reponse:read'])]
    private ?string $status = null;

    #[ORM\ManyToOne(targetEntity: Question::class, inversedBy: "reponses")]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['reponse:read'])]
    private ?Question $question = null;

    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
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
}