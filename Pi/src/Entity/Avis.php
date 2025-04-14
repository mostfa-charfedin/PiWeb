<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Avis
 *
 * @ORM\Table(name="avis", indexes={@ORM\Index(name="idProgramme", columns={"idProgramme"})})
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
     * @ORM\Column(name="idProgramme", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idprogramme = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idUser", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $iduser = NULL;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdprogramme(): ?int
    {
        return $this->idprogramme;
    }

    public function setIdprogramme(?int $idprogramme): static
    {
        $this->idprogramme = $idprogramme;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(?int $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
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


}