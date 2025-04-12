<?php

namespace App\Entity;
use App\Enum\UserStatus;
use App\Enum\UserRole;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Table(name: 'user')]
#[ORM\UniqueConstraint(name: 'email', columns: ['email'])]
#[ORM\UniqueConstraint(name: 'cin', columns: ['cin'])]
#[ORM\Entity]
class User 
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private int $id;

    #[ORM\Column(name: 'nom', type: 'string', length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(name: 'prenom', type: 'string', length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(name: 'email', type: 'string', length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(name: 'password', type: 'string', length: 255, nullable: true)]
    private ?string $password = null;

    #[ORM\Column(name: 'cin', type: 'integer', nullable: true)]
    private ?int $cin = null;

    #[ORM\Column(name: 'dateNaissance', type: 'date', nullable: true)]
    private ?\DateTimeInterface $datenaissance = null;

    #[ORM\Column(name: 'role', type: 'string', length: 20, nullable: true, options: ['default' => 'USER'])]
    private string $role = 'USER';

    #[ORM\Column(name: 'image_url', type: 'string', length: 255, nullable: true)]
    private ?string $image_url = null;

    #[ORM\Column(type: 'integer')]
    private int $numPhone;

    #[ORM\Column(name: 'status', type: 'string', length: 20, nullable: true, options: ['default' => 'ACTIVE'])]
    private string $status = 'ACTIVE';

    #[ORM\ManyToMany(targetEntity: Quiz::class, mappedBy: 'iduser')]
    private \Doctrine\Common\Collections\Collection $idquiz;

    public function __construct()
    {
        $this->idquiz = new \Doctrine\Common\Collections\ArrayCollection();
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
    }

    public function setNumPhone(int $numPhone): self
    {
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

    public function getRoles(): string
    {
        // Ensure roles from the database are prefixed with "ROLE_"
        $roles = $this->role ? [$this->role] : [];
    
        // Convert "user" to "ROLE_USER"
        $roles = array_map(fn($role) => strtoupper($role), $roles);
        $roles = array_map(fn($role) => str_starts_with($role, 'ROLE_') ? $role : 'ROLE_' . $role, $roles);
    
        // Remove duplicates and join the roles as a string, separated by commas
        return implode(',', array_unique($roles));
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

    public function getPassword(): ?string
    {
        return $this->password;
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

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }
}