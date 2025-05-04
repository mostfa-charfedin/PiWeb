<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ressources
 *
 * @ORM\Table(name="ressources", indexes={@ORM\Index(name="idUser", columns={"id"})})
 * @ORM\Entity
 */
class Ressources
{
    /**
     * @var int
     *
     * @ORM\Column(name="idResource", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresource;   // Identifiant unique pour chaque ressource et  Déclarations 

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type = 'Document'; // Default type is "Document"

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=true)
     */
    private $lien;

    /**
     * @var float|null
     *
     * @ORM\Column(name="noteAverage", type="float", precision=10, scale=0, nullable=true)
     */
    private $noteaverage = null;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;   // L'utilisateur associé à la ressource (propriétaire de la ressource)

    /**
     * @var Collection<int, Evaluation>
     */
    #[ORM\OneToMany(mappedBy: 'ressource', targetEntity: Evaluation::class)]
    private Collection $evaluations;

    public function __construct()
    {
        $this->evaluations = new ArrayCollection();
    }

    // Getter and Setter for $idresource
    public function getIdresource(): ?int
    {
        return $this->idresource;
    }

    public function setIdresource(int $idresource): self
    {
        $this->idresource = $idresource;
        return $this;
    }

    // Getter and Setter for $type
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    // Getter and Setter for $description
    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    // Getter and Setter for $titre
    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;
        return $this;
    }

    // Getter and Setter for $lien
    public function getLien(): ?string
    {
        return $this->lien;
    }

    public function setLien(?string $lien): self
    {
        $this->lien = $lien;
        return $this;
    }

    // Getter and Setter for $noteaverage
    public function getNoteaverage(): ?float
    {
        return $this->noteaverage;
    }

    public function setNoteaverage(?float $noteaverage): self
    {
        $this->noteaverage = $noteaverage;
        return $this;
    }

    // Getter and Setter for $id (User)
    public function getId(): ?User
    {
        return $this->id;
    }

    public function setId(?User $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Collection<int, Evaluation>
     */
    public function getEvaluations(): Collection
    {
        return $this->evaluations;
    }

    public function addEvaluation(Evaluation $evaluation): static
    {
        if (!$this->evaluations->contains($evaluation)) {
            $this->evaluations->add($evaluation);
            $evaluation->setRessource($this);
        }

        return $this;
    }

    public function removeEvaluation(Evaluation $evaluation): static
    {
        if ($this->evaluations->removeElement($evaluation)) {
            // set the owning side to null (unless already changed)
            if ($evaluation->getRessource() === $this) {
                $evaluation->setRessource(null);
            }
        }

        return $this;
    }
}
