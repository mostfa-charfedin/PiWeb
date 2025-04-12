<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="idQuestion", columns={"idQuestion"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReponse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Response", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $response = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $status = 'NULL';

    /**
     * @var \Question
     *
     * @ORM\ManyToOne(targetEntity="Question")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuestion", referencedColumnName="idQuestion")
     * })
     */
    private $idquestion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Question", mappedBy="repense")
     */
    private $question = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdreponse(): ?int
    {
        return $this->idreponse;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(?string $response): static
    {
        $this->response = $response;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getIdquestion(): ?Question
    {
        return $this->idquestion;
    }

    public function setIdquestion(?Question $idquestion): static
    {
        $this->idquestion = $idquestion;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestion(): Collection
    {
        return $this->question;
    }

    public function addQuestion(Question $question): static
    {
        if (!$this->question->contains($question)) {
            $this->question->add($question);
            $question->addRepense($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): static
    {
        if ($this->question->removeElement($question)) {
            $question->removeRepense($this);
        }

        return $this;
    }

}
