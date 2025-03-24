<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table(name="evaluation", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id", "idResource"})}, indexes={@ORM\Index(name="idResource", columns={"idResource"})})
 * @ORM\Entity
 */
class Evaluation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idEvaluation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluation;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idResource", type="integer", nullable=false)
     */
    private $idresource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="note", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $note = NULL;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEvaluation", type="datetime", nullable=false, options={"default"="current_timestamp()"})
     */
    private $dateevaluation = 'current_timestamp()';


}
