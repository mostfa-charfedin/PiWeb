<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris", indexes={@ORM\Index(name="idResource", columns={"idResource"}), @ORM\Index(name="idUser", columns={"id"})})
 * @ORM\Entity
 */
class Favoris
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFavoris", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfavoris;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var \Ressources
     *
     * @ORM\ManyToOne(targetEntity="Ressources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResource", referencedColumnName="idResource")
     * })
     */
    private $idresource;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titreRessource = null;

    #[ORM\ManyToOne]
    private ?Ressources $ressource = null;

    public function getIdfavoris(): ?int
    {
        return $this->idfavoris;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;
        return $this;
    }

    public function getIdresource(): ?Ressources
    {
        return $this->idresource;
    }

    public function setIdresource(?Ressources $idresource): self
    {
        $this->idresource = $idresource;
        return $this;
    }

    public function getId(): ?User
    {
        return $this->id;
    }

    public function setId(?User $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;
        return $this;
    }

    // Getter for titreRessource
    public function getTitreRessource(): ?string
    {
        return $this->titreRessource;
    }

    // Setter for titreRessource
    public function setTitreRessource(string $titreRessource): static
    {
        $this->titreRessource = $titreRessource;
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
}
