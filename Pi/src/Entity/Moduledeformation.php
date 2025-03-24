<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Moduledeformation
 *
 * @ORM\Table(name="moduledeformation")
 * @ORM\Entity
 */
class Moduledeformation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idModule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmodule;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $titre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $sujet = 'NULL';


}
