<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'quiz')]
#[ORM\Entity]
class Quiz
{
    #[ORM\Column(name: 'idQuiz', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $idquiz;

    #[ORM\Column(name: 'nom', type: 'string', length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: 'dateCreation', type: 'date', nullable: true)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'idquiz')]
    #[ORM\JoinTable(name: 'score')]
    #[ORM\JoinColumn(name: 'idQuiz', referencedColumnName: 'idQuiz')]
    #[ORM\InverseJoinColumn(name: 'idUser', referencedColumnName: 'id')]
    private \Doctrine\Common\Collections\Collection $iduser;

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

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(?\DateTimeInterface $datecreation): self
    {
        $this->datecreation = $datecreation;
        return $this;
    }

    public function getIduser(): \Doctrine\Common\Collections\Collection
    {
        return $this->iduser;
    }

    public function addIduser(User $iduser): self
    {
        if (!$this->iduser->contains($iduser)) {
            $this->iduser[] = $iduser;
        }
        return $this;
    }

    public function removeIduser(User $iduser): self
    {
        $this->iduser->removeElement($iduser);
        return $this;
    }
}
