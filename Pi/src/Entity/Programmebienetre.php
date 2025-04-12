<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;

#[ORM\Table(name: 'programmebienetre')]
#[ORM\Index(name: 'idUser', columns: ['idUser'])]
#[ORM\Entity]
class Programmebienetre
{
    #[ORM\Column(name: 'idProgramme', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $idprogramme;

    #[ORM\Column(name: 'titre', type: 'string', length: 255, nullable: false)]
    private ?string $titre = null;

    #[ORM\Column(name: 'type', type: 'string', length: 255, nullable: false)]
    private ?string $type = null;

    #[ORM\Column(name: 'description', type: 'string', length: 255, nullable: false)]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: 'idUser', referencedColumnName: 'id', nullable: false)]
    private ?User $iduser = null;

    #[ORM\Column(name: 'date_programme', type: 'date', nullable: false)]
    private ?\DateTimeInterface $dateProgramme = null;

    public function getIdprogramme(): ?int
    {
        return $this->idprogramme;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;
        return $this;
    }

    public function getDateProgramme(): ?\DateTimeInterface
    {
        return $this->dateProgramme;
    }

    public function setDateProgramme(?\DateTimeInterface $dateProgramme): self
    {
        $this->dateProgramme = $dateProgramme;
        return $this;
    }
}
