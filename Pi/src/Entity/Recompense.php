<?php

namespace App\Entity;

use App\Repository\RecompenseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecompenseRepository::class)]
#[ORM\Table(name: 'recompense')]
class Recompense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'idRecompense', type: 'integer')]
    private ?int $idrecompense = null;

    #[ORM\Column(name: 'type', type: 'string', length: 255)]
    private ?string $type = null;

    #[ORM\Column(name: 'dateAttribution', type: 'date', nullable: true)]
    private ?\DateTimeInterface $dateattribution = null;

    #[ORM\Column(name: 'statusRecompence', type: 'string', length: 255, nullable: true)]
    private ?string $statusrecompence = null;

    #[ORM\ManyToOne(targetEntity: Programmebienetre::class)]
    #[ORM\JoinColumn(name: 'idProgramme', referencedColumnName: 'idProgramme', nullable: false)]
    private ?Programmebienetre $idprogramme = null;

    public function getIdrecompense(): ?int
    {
        return $this->idrecompense;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
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

    public function getStatusrecompence(): ?string
    {
        return $this->statusrecompence;
    }

    public function setStatusrecompence(?string $statusrecompence): self
    {
        $this->statusrecompence = $statusrecompence;
        return $this;
    }

    public function getIdprogramme(): ?Programmebienetre
    {
        return $this->idprogramme;
    }

    public function setIdprogramme(?Programmebienetre $idprogramme): self
    {
        $this->idprogramme = $idprogramme;
        return $this;
    }
}
