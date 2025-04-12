<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Code
 *
 * @ORM\Table(name="code", uniqueConstraints={@ORM\UniqueConstraint(name="code", columns={"code"})}, indexes={@ORM\Index(name="idUser", columns={"idUser"})})
 * @ORM\Entity
 */
class Code
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCode", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $code = 'NULL';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    public function getIdcode(): ?int
    {
        return $this->idcode;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getIduser(): ?User
    {
        return $this->iduser;
    }

    public function setIduser(?User $iduser): static
    {
        $this->iduser = $iduser;

        return $this;
    }


}
