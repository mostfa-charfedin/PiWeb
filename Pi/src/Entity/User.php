<?php

namespace App\Entity;

<<<<<<< HEAD
use App\Enum\UserStatus;
use App\Enum\UserRole;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
=======
use App\Entity\Poste;
use App\Entity\Comment;
use App\Entity\Like;
>>>>>>> posts-claim
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

<<<<<<< HEAD
/**
 * @ORM\Entity
 * @ORM\Table(
 *     name="user",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="email", columns={"email"}),
 *         @ORM\UniqueConstraint(name="cin", columns={"cin"})
 *     }
 * )
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private ?int $id = null;

    /**
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private ?string $nom = null;

    /**
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private ?string $prenom = null;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private ?string $email = null;

    /**
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private ?string $password = null;

    /**
     * @ORM\Column(name="cin", type="integer", nullable=true)
     */
    private ?int $cin = null;

    /**
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    private ?\DateTimeInterface $datenaissance = null;

    /**
     * @ORM\Column(name="role", type="string", length=20, nullable=true, options={"default"="USER"})
     */
    private ?string $role = 'USER';

    /**
     * @ORM\Column(name="image_url", type="string", length=255, nullable=true)
     */
    private ?string $image_url = null;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $numPhone = null;

    /**
     * @ORM\Column(name="status", type="string", length=20, nullable=true, options={"default"="ACTIVE"})
     */
    private ?string $status = 'ACTIVE';

    /**
     * @ORM\OneToMany(targetEntity="Score", mappedBy="user", orphanRemoval=true)
     */
    private Collection $scores;

    public function __construct()
    {
        $this->scores = new ArrayCollection();
    }

    /**
     * @return Collection|Score[]
     */
    public function getScores(): Collection
    {
        return $this->scores;
    }

    public function addScore(Score $score): static
    {
        if (!$this->scores->contains($score)) {
            $this->scores[] = $score;
            $score->setUser($this);
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNumPhone(): ?int
    {
        return $this->numPhone;
=======
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
>>>>>>> posts-claim
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
<<<<<<< HEAD
        $this->numPhone = $numPhone;

        return $this;
    }

    public function getCin(): ?int
    {
        return $this->cin;
    }

    public function setCin(int $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(UserStatus $status): self
    {
        $this->status = $status->value; 
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(?string $image_url): self
    {
        $this->image_url = $image_url;
        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): array
    {
        $baseRole = $this->role ?: 'USER';
        $role = strtoupper($baseRole);
        if (!str_starts_with($role, 'ROLE_')) {
            $role = 'ROLE_' . $role;
        }
        return array_unique([$role, 'ROLE_USER']);
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(UserRole $role): self
    {
        $this->role = $role->value;
        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): self
    {
        $this->datenaissance = $datenaissance;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary sensitive data on the user, clear it here
    }

    public function getUsername(): string
    {
        return $this->getUserIdentifier();
=======
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
>>>>>>> posts-claim
    }
}