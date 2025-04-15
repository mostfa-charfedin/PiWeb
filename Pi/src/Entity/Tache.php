<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tache
 *
 * @ORM\Table(name="tache", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idProjet", columns={"idProjet"})})
 * @ORM\Entity
 */
class Tache
{
    /**
     * @var int
     *
     * @ORM\Column(name="idTache", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtache;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="date", type="integer", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true, options={"default"="on progress"})
     */
    private $status = 'to do'; // Correct default value

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;
    /**
 * @var \DateTime
 *
 * @ORM\Column(name="created_at", type="datetime", options={"default": "CURRENT_TIMESTAMP"})
 */
private $created_at;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProjet", referencedColumnName="idProjet")
     * })
     */
    private $idprojet;
    
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="completed_at", type="datetime", nullable=true)
     */
    private $completedAt;
    public function __construct()
{
    $this->created_at = new \DateTime();
}


    public function getIdtache(): ?int
    {
        return $this->idtache;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDate(): ?int
    {
        return $this->date;
    }

    public function setDate(?int $date): self
    {
        $this->date = $date;
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

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): self
    {
        $this->iduser = $iduser;
        return $this;
    }

    public function getIdprojet(): ?Projet
    {
        return $this->idprojet;
    }

    public function setIdprojet(?Projet $idprojet): self
    {
        $this->idprojet = $idprojet;
        return $this;
    }
    public function getCreatedAt(): ?\DateTime
{
    return $this->created_at;
}

public function setCreatedAt(\DateTime $created_at): self
{
    $this->created_at = $created_at;
    return $this;
}
public function updateCompletionTimestamp(): void
    {
        if ($this->status === 'Completed' && $this->completedAt === null) {
            $this->completedAt = new \DateTime();
        }
    }
    public function getCompletedAt(): ?\DateTimeInterface
    {
        return $this->completedAt;
    }

    public function setCompletedAt(?\DateTimeInterface $completedAt): self
    {
        $this->completedAt = $completedAt;
        return $this;
    }

    /**
     * Calculates whether task was completed early
     */
    public function isCompletedEarly(): bool
    {
        if (!$this->completedAt || !$this->date) {
            return false;
        }

        $deadline = (clone $this->created_at)->add(new \DateInterval('P' . $this->date . 'W'));
        return $this->completedAt < $deadline;
    }

    /**
     * Calculates whether task is overdue
     */
    public function isOverdue(): bool
    {
        if ($this->status === 'Completed' || !$this->date) {
            return false;
        }

        $deadline = (clone $this->created_at)->add(new \DateInterval('P' . $this->date . 'W'));
        return new \DateTime() > $deadline;
    }

}
