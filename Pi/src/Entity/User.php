<?php

namespace App\Entity;
use App\Enum\UserStatus;
use App\Enum\UserRole;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"}), @ORM\UniqueConstraint(name="cin", columns={"cin"})})
 * @ORM\Entity
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
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
     * @ORM\Column(name="nom", type="string", length=255, nullable=true, options={"default"="NULL"})

     */
    private $nom;

    /**
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true, options={"default"="NULL"})

     */
    private $prenom;

    /**
     * @ORM\Column(name="email", type="string", length=255, nullable=true, options={"default"="NULL"})

     */
    private $email ;

    /**
     * @ORM\Column(name="password", type="string", length=255, nullable=true, options={"default"="NULL"})

     */
    private $password ;

    /**
     * @ORM\Column(name="cin", type="integer", nullable=true, options={"default"="NULL"})
    
     */
    private $cin ;

    /**
     * @ORM\Column(name="dateNaissance", type="date", nullable=true, options={"default"="NULL"})

     */
    private $datenaissance ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=20, nullable=true, options={"default"="'USER'"})
     */
    private $role = 'USER';

    /**
     * @var string|null
     *
     * @ORM\Column(name="image_url", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private ?string $image_url= null; 
    

     /**
     * @ORM\Column(type="integer")

     */
    private $numPhone;


/**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true, options={"default"="'ACTIVE'"})
     */
    private $status = 'ACTIVE';
  
    
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Quiz", mappedBy="iduser")
     */
    private $idquiz = array();

    /**
     * Constructor
     */
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
    public function getRoles(): array
    {
        // Normalisation du rôle stocké en base
        $baseRole = $this->role ?: 'USER'; // Valeur par défaut si vide
        
        // Conversion au format Symfony
        $role = strtoupper($baseRole);
        if (!str_starts_with($role, 'ROLE_')) {
            $role = 'ROLE_' . $role;
        }
        
        // Tous les utilisateurs ont au moins ROLE_USER
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
        return null; // Not needed when using modern hashing algorithms
    }

    public function eraseCredentials(): void
    {
        // If you store any temporary sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getUsername(): string
    {
        return $this->getUserIdentifier();
    }
}
