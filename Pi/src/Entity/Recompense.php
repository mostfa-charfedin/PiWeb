<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Programmebienetre; // ✅ Ajout de l'importation de Programmebienetre

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
    private $dateattribution = null;  // Définir null au lieu de 'NULL'

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private ?string $type = null;  // Définir null au lieu de 'NULL'

    /**
     * @var string|null
     *
     * @ORM\Column(name="statusRecompence", type="string", length=255, nullable=true)
     */
    private ?string $statusrecompence = null;  // Définir null au lieu de 'NULL'

    /**
     * @var Programmebienetre|null
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Programmebienetre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProgramme", referencedColumnName="idProgramme", onDelete="CASCADE")
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

    public function setDateattribution(?\DateTimeInterface $dateattribution): static
    {
        $this->dateattribution = $dateattribution;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getStatusrecompence(): ?string
    {
        return $this->statusrecompence;
    }

    public function setStatusrecompence(?string $statusrecompence): static
    {
        $this->statusrecompence = $statusrecompence;

        return $this;
    }

    public function getIdprogramme(): ?Programmebienetre
    {
        return $this->idprogramme;
    }

    public function setIdprogramme(?Programmebienetre $idprogramme): static
    {
        $this->idprogramme = $idprogramme;

        return $this;
    }
}
