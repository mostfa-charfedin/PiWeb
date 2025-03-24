<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoris
 *
 * @ORM\Table(name="favoris", indexes={@ORM\Index(name="idResource", columns={"idResource"}), @ORM\Index(name="idUser", columns={"id"})})
 * @ORM\Entity
 */
class Favoris
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFavoris", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfavoris;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $note = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="TitreRessource", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $titreressource = 'NULL';

    /**
     * @var \Ressources
     *
     * @ORM\ManyToOne(targetEntity="Ressources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResource", referencedColumnName="idResource")
     * })
     */
    private $idresource;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id", referencedColumnName="id")
     * })
     */
    private $id;


}
