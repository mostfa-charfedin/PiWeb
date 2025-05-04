<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id", "idResource"})}, indexes={@ORM\Index(name="idResource", columns={"idResource"})})
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $idEvaluation = null;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private ?int $id = null;

    /**
     * @var int
     *
     * @ORM\Column(name="idResource", type="integer", nullable=false)
     */
    private ?int $idResource = null;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note", type="integer", nullable=false, options={"check"="note BETWEEN 1 AND 10"})
     * @Assert\NotNull(message="The note cannot be null")
     * @Assert\Range(
     *      min = 1,
     *      max = 10,
     *      notInRangeMessage = "The note must be between {{ min }} and {{ max }}",
     * )
     */
    private ?int $note = null;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvaluation", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private ?\DateTimeInterface $dateEvaluation = null;

    #[ORM\ManyToOne(inversedBy: 'evaluations')]
    private ?Ressources $ressource = null;

    #[ORM\ManyToOne]
    private ?User $user = null;

    public function getIdEvaluation(): ?int
    {
        return $this->idEvaluation;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getIdResource(): ?int
    {
        return $this->idResource;
    }

    public function setIdResource(int $idResource): static
    {
        $this->idResource = $idResource;
        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        if ($note !== null && ($note < 1 || $note > 10)) {
            throw new \InvalidArgumentException('Note must be between 1 and 10');
        }
        $this->note = $note;
        return $this;
    }

    public function getDateEvaluation(): ?\DateTimeInterface
    {
        return $this->dateEvaluation;
    }

    public function setDateEvaluation(\DateTimeInterface $dateEvaluation): static
    {
        $this->dateEvaluation = $dateEvaluation;
        return $this;
    }

    public function getRessource(): ?Ressources
    {
        return $this->ressource;
    }

    public function setRessource(?Ressources $ressource): static
    {
        $this->ressource = $ressource;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}