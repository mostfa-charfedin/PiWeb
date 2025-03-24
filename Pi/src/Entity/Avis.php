<?php

namespace App\Entity;

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


}
