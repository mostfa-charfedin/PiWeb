<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\User;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Programmebienetre
 *
 * @ORM\Table(name="programmebienetre", indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Programmebienetre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProgramme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprogramme;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Veuillez saisir un titre pour le programme")
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Le titre est trop court (minimum {{ limit }} caractères)",
     *     maxMessage="Le titre est trop long (maximum {{ limit }} caractères)"
     * )
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Veuillez sélectionner un type de programme")
     * @Assert\Choice(
     *     choices={"Physique", "Mental", "Social", "Professionnel"},
     *     message="Type invalide. Veuillez choisir parmi : Physique, Mental, Social ou Professionnel"
     * )
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     * @Assert\NotBlank(message="Veuillez saisir une description pour le programme")
     * @Assert\Length(
     *     min=10,
     *     max=255,
     *     minMessage="La description est trop courte (minimum {{ limit }} caractères)",
     *     maxMessage="La description est trop longue (maximum {{ limit }} caractères)"
     * )
     */
    private $description;

    /**
     * @var \App\Entity\User|null
     *
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id", nullable=false)
     * })
     * @Assert\NotNull(message="Veuillez sélectionner un utilisateur pour le programme")
     */
    private $iduser;

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

    public function getIduser(): ?\App\Entity\User
    {
        return $this->iduser;
    }

    public function setIduser(?\App\Entity\User $iduser): self
    {
        $this->iduser = $iduser;
        return $this;
    }
}
