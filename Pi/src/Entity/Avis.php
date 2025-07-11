<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis")
 * @ORM\Entity
 */
class Avis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $rating = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $commentaire = 'NULL';

    /**
     * @var Programmebienetre
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\Programmebienetre", fetch="EAGER")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProgramme", referencedColumnName="idProgramme", onDelete="CASCADE", nullable=true)
     * })
     */
    private $programme;

    /**
     * @var User|null
     * 
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(name="idUser", referencedColumnName="id", nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(?int $rating): static
    {
        $this->rating = $rating;
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

    public function getProgramme(): ?Programmebienetre
    {
        return $this->programme;
    }

    public function setProgramme(?Programmebienetre $programme): static
    {
        $this->programme = $programme;
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

    public function getIdprogramme(): ?int
    {
        return $this->programme ? $this->programme->getIdprogramme() : null;
    }

    public function setIdprogramme(?int $idprogramme): static
    {
        // Cette méthode est gardée pour compatibilité
        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->user ? $this->user->getId() : null;
    }

    public function setIduser(?int $iduser): static
    {
        // Cette méthode est gardée pour compatibilité
        return $this;
    }
}