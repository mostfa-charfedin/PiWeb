<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recompense
 *
 * @ORM\Table(name="recompense", indexes={@ORM\Index(name="idProgramme", columns={"idProgramme"})})
 * @ORM\Entity
 */
class Recompense
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRecompense", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrecompense;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateAttribution", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateattribution = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $type = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="statusRecompence", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $statusrecompence = 'NULL';

    /**
     * @var \Programmebienetre
     *
     * @ORM\ManyToOne(targetEntity="Programmebienetre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProgramme", referencedColumnName="idProgramme")
     * })
     */
    private $idprogramme;


}
