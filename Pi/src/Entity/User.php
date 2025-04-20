<?php

namespace App\Entity;

use App\Entity\Poste;
use App\Entity\Comment;
use App\Entity\Like;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, unique: true, nullable: true)]
    #[Assert\Email]
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(nullable: true, unique: true)]
    private ?int $cin = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $datenaissance = null;

    #[ORM\Column(length: 255, nullable: true, options: ['default' => 'USER'])]
    private ?string $role = 'USER';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageUrl = null;

    #[ORM\Column(nullable: true)]
    private ?int $numPhone = null;

    #[ORM\Column(length: 20, nullable: true, options: ['default' => 'ACTIVE'])]
    private ?string $status = 'ACTIVE';

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private ?bool $genre = false;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Poste::class)]
    private Collection $postes;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Like::class)]
    private Collection $likes;

    public function __construct()
    {
        $this->postes = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(?string $nom): self { $this->nom = $nom; return $this; }

    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(?string $prenom): self { $this->prenom = $prenom; return $this; }

    public function getEmail(): ?string { return $this->email; }
    public function setEmail(?string $email): self { $this->email = $email; return $this; }

    public function getPassword(): ?string { return $this->password; }
    public function setPassword(?string $password): self { $this->password = $password; return $this; }

    public function getCin(): ?int { return $this->cin; }
    public function setCin(?int $cin): self { $this->cin = $cin; return $this; }

    public function getDatenaissance(): ?\DateTimeInterface { return $this->datenaissance; }
    public function setDatenaissance(?\DateTimeInterface $datenaissance): self { $this->datenaissance = $datenaissance; return $this; }

    public function getRole(): ?string { return $this->role; }
    public function setRole(?string $role): self { $this->role = $role; return $this; }

    public function getImageUrl(): ?string { return $this->imageUrl; }
    public function setImageUrl(?string $imageUrl): self { $this->imageUrl = $imageUrl; return $this; }

    public function getNumPhone(): ?int { return $this->numPhone; }
    public function setNumPhone(?int $numPhone): self { $this->numPhone = $numPhone; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(?string $status): self { $this->status = $status; return $this; }

    public function getGenre(): ?bool { return $this->genre; }
    public function setGenre(?bool $genre): self { $this->genre = $genre; return $this; }

    public function getRoles(): array
    {
        $roles = $this->role ? [$this->role] : [];
        return array_map(fn($r) => str_starts_with($r, 'ROLE_') ? strtoupper($r) : 'ROLE_' . strtoupper($r), $roles);
    }

    public function getFullName(): string
    {
        return trim(($this->prenom ?? '') . ' ' . ($this->nom ?? ''));
    }

    // Relations avec Postes
    public function getPostes(): Collection { return $this->postes; }
    public function addPoste(Poste $poste): self
    {
        if (!$this->postes->contains($poste)) {
            $this->postes->add($poste);
            $poste->setUser($this);
        }
        return $this;
    }
    public function removePoste(Poste $poste): self
    {
        if ($this->postes->removeElement($poste) && $poste->getUser() === $this) {
            $poste->setUser(null);
        }
        return $this;
    }

    // Relations avec Comments
    public function getComments(): Collection { return $this->comments; }
    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setUser($this);
        }
        return $this;
    }
    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment) && $comment->getUser() === $this) {
            $comment->setUser(null);
        }
        return $this;
    }

    // Relations avec Likes
    public function getLikes(): Collection { return $this->likes; }
    public function addLike(Like $like): self
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setUser($this);
        }
        return $this;
    }
    public function removeLike(Like $like): self
    {
        if ($this->likes->removeElement($like) && $like->getUser() === $this) {
            $like->setUser(null);
        }
        return $this;
    }
}