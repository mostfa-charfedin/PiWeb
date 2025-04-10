<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
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
    private ?string $email = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(nullable: true, unique: true)]
    private ?int $cin = null;

    #[ORM\Column(type: 'date', nullable: true)]
    private ?\DateTimeInterface $datenaissance = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $role = 'USER';

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_url = null;

    #[ORM\Column]
    private ?int $numPhone = null;

    #[ORM\Column(length: 20, options: ['default' => 'ACTIVE'], nullable: true)]
    private ?string $status = 'ACTIVE';

    /** @var Collection<int, Poste> */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Poste::class)]
    private Collection $postes;

    /** @var Collection<int, Comment> */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class)]
    private Collection $comments;

    /** @var Collection<int, Like> */
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Like::class)]
    private Collection $likes;

    public function __construct()
    {
        $this->postes = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->likes = new ArrayCollection();
    }

    // --- Getters & Setters ---

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

    public function getImageUrl(): ?string { return $this->image_url; }
    public function setImageUrl(?string $image_url): self { $this->image_url = $image_url; return $this; }

    public function getNumPhone(): ?int { return $this->numPhone; }
    public function setNumPhone(int $numPhone): self { $this->numPhone = $numPhone; return $this; }

    public function getStatus(): ?string { return $this->status; }
    public function setStatus(?string $status): self { $this->status = $status; return $this; }

    public function getRoles(): string
    {
        $roles = $this->role ? [$this->role] : [];
        $roles = array_map(fn($r) => strtoupper($r), $roles);
        $roles = array_map(fn($r) => str_starts_with($r, 'ROLE_') ? $r : 'ROLE_' . $r, $roles);
        return implode(',', array_unique($roles));
    }

    // --- Relations: Postes ---

    public function getPostes(): Collection { return $this->postes; }

    public function addPoste(Poste $poste): static
    {
        if (!$this->postes->contains($poste)) {
            $this->postes->add($poste);
            $poste->setUser($this);
        }
        return $this;
    }

    public function removePoste(Poste $poste): static
    {
        if ($this->postes->removeElement($poste) && $poste->getUser() === $this) {
            $poste->setUser(null);
        }
        return $this;
    }

    // --- Relations: Comments ---

    public function getComments(): Collection { return $this->comments; }

    public function addComment(Comment $comment): static
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setUser($this);
        }
        return $this;
    }

    public function removeComment(Comment $comment): static
    {
        if ($this->comments->removeElement($comment) && $comment->getUser() === $this) {
            $comment->setUser(null);
        }
        return $this;
    }

    // --- Relations: Likes ---

    public function getLikes(): Collection { return $this->likes; }

    public function addLike(Like $like): static
    {
        if (!$this->likes->contains($like)) {
            $this->likes->add($like);
            $like->setUser($this);
        }
        return $this;
    }

    public function removeLike(Like $like): static
    {
        if ($this->likes->removeElement($like) && $like->getUser() === $this) {
            $like->setUser(null);
        }
        return $this;
    }
}
