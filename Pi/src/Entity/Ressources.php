<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressources
 *
 * @ORM\Table(name="ressources", indexes={@ORM\Index(name="idUser", columns={"id"})})
 * @ORM\Entity
 */
class Ressources
{
    /**
     * @var int
     *
     * @ORM\Column(name="idResource", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idresource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $description = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $titre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $lien = 'NULL';

    /**
     * @var float
     *
     * @ORM\Column(name="noteAverage", type="float", precision=10, scale=0, nullable=false)
     */
    private $noteaverage = '0';

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
