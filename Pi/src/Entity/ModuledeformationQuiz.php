<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuledeformationQuiz
 *
 * @ORM\Table(name="moduledeformation_quiz", indexes={@ORM\Index(name="idQuiz", columns={"idQuiz"}), @ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="IDX_D265574E6F358EB2", columns={"idModule"})})
 * @ORM\Entity
 */
class ModuledeformationQuiz
{
    /**
     * @var \Quiz
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz")
     * })
     */
    private $idquiz;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    private $iduser;

    /**
     * @var \Moduledeformation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Moduledeformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModule", referencedColumnName="idModule")
     * })
     */
    private $idmodule;


}
