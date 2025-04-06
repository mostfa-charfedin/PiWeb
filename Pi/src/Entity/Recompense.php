<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recompense
 *
 * @ORM\Table(name="recompense", indexes={@ORM\Index(name="idProgramme", columns={"idProgramme"})})
 * @ORM\Entity
 */
class Recompense
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRecompense", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecompense;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateAttribution", type="date", nullable=true)
     */
    private $dateattribution = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type = null;

    /**
     * @var string|null
     *
     * @ORM\Column(name="statusRecompence", type="string", length=255, nullable=true)
     */
    private $statusrecompence = null;

    /**
     * @var \Programmebienetre
     *
     * @ORM\ManyToOne(targetEntity="Programmebienetre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProgramme", referencedColumnName="idProgramme")
     * })
     */
    private $idprogramme;

    public function getIdrecompense(): ?int
    {
        return $this->idrecompense;
    }

    public function getDateattribution(): ?\DateTimeInterface
    {
        return $this->dateattribution;
    }

    public function setDateattribution(?\DateTimeInterface $dateattribution): self
    {
        $this->dateattribution = $dateattribution;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getStatusrecompence(): ?string
    {
        return $this->statusrecompence;
    }

    public function setStatusrecompence(?string $statusrecompence): self
    {
        $this->statusrecompence = $statusrecompence;
        return $this;
    }

    public function getIdprogramme(): ?\App\Entity\Programmebienetre
    {
        return $this->idprogramme;
    }

    public function setIdprogramme(?\App\Entity\Programmebienetre $idprogramme): self
    {
        $this->idprogramme = $idprogramme;
        return $this;
    }
}
