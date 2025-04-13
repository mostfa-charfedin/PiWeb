<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Question;

/**
 * @ORM\Entity(repositoryClass=ReponseRepository::class)
 * @ORM\Table(name="reponse")
 */
class Reponse
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="idReponse", type="integer")
     */
    private $idReponse;

    /**
     * @ORM\Column(name="Response", type="string", length=255)
     */
    private $response;

  /**
 * @ORM\Column(name="status", type="string", length=10)
 */
private $status;
    /**
     * @ORM\ManyToOne(targetEntity=Question::class, inversedBy="reponses")
     * @ORM\JoinColumn(name="idQuestion", referencedColumnName="idQuestion", nullable=false, onDelete="CASCADE")
     */
    private $question;

    public function getIdReponse(): ?int
    {
        return $this->idReponse;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(string $response): self
    {
        $this->response = $response;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }
    
    public function setStatus(string $status): self
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

    public function __toString(): string
    {
        return $this->response ?? '';
    }
}
