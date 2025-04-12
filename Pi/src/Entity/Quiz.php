<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz")
 * @ORM\Entity
 */
class Quiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="idQuiz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquiz;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateCreation", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datecreation = 'NULL';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="idquiz")
     * @ORM\JoinTable(name="score",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     *   }
     * )
     */
    private $iduser = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->iduser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdquiz(): ?int
    {
        return $this->idquiz;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getIduser(): Collection
    {
        return $this->iduser;
    }

    public function addIduser(User $iduser): static
    {
        if (!$this->iduser->contains($iduser)) {
            $this->iduser->add($iduser);
        }

        return $this;
    }

    public function removeIduser(User $iduser): static
    {
        $this->iduser->removeElement($iduser);

        return $this;
    }

}
