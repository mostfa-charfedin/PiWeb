<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

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
    private $idevaluation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idResource", type="integer", nullable=false)
     */
    private $idresource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $note = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvaluation", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $dateevaluation = 'current_timestamp()';

    public function getIdevaluation(): ?int
    {
        return $this->idevaluation;
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

    public function getIdresource(): ?int
    {
        return $this->idresource;
    }

    public function setIdresource(int $idresource): static
    {
        $this->idresource = $idresource;

        return $this;
    }

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getDateevaluation(): ?\DateTimeInterface
    {
        return $this->dateevaluation;
    }

    public function setDateevaluation(\DateTimeInterface $dateevaluation): static
    {
        $this->dateevaluation = $dateevaluation;

        return $this;
    }


}
