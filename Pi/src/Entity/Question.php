<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="idQuiz", columns={"idQuiz"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="idQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Question", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $question = 'NULL';

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz")
     * })
     */
    private $idquiz;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reponse", inversedBy="question")
     * @ORM\JoinTable(name="question_repense",
     *   joinColumns={
     *     @ORM\JoinColumn(name="question_id", referencedColumnName="idQuestion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="repense_id", referencedColumnName="idReponse")
     *   }
     * )
     */
    private $repense = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repense = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdquestion(): ?int
    {
        return $this->idquestion;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): static
    {
        $this->question = $question;

        return $this;
    }

    public function getIdquiz(): ?Quiz
    {
        return $this->idquiz;
    }

    public function setIdquiz(?Quiz $idquiz): static
    {
        $this->idquiz = $idquiz;

        return $this;
    }

    /**
     * @return Collection<int, Reponse>
     */
    public function getRepense(): Collection
    {
        return $this->repense;
    }

    public function addRepense(Reponse $repense): static
    {
        if (!$this->repense->contains($repense)) {
            $this->repense->add($repense);
        }

        return $this;
    }

    public function removeRepense(Reponse $repense): static
    {
        $this->repense->removeElement($repense);

        return $this;
    }

}
