<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuledeformationQuiz
 *
 * @ORM\Table(name="moduledeformation_quiz", indexes={@ORM\Index(name="idQuiz", columns={"idQuiz"}), @ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="IDX_D265574E6F358EB2", columns={"idModule"})})
 * @ORM\Entity
 */
#[ORM\Entity]
#[ORM\Table(name: "moduledeformation_quiz")]
#[ORM\Index(columns: ["idQuiz"], name: "idQuiz")]
#[ORM\Index(columns: ["idUser"], name: "idUser")]
#[ORM\Index(columns: ["idModule"], name: "IDX_D265574E6F358EB2")]
class ModuledeformationQuiz
{
    /**
     * @var \Quiz
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="id")
     * })
     */
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\OneToOne(targetEntity: Quiz::class)]
    #[ORM\JoinColumn(name: "idQuiz", referencedColumnName: "id")]
    private ?Quiz $idquiz = null;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUser", referencedColumnName="id")
     * })
     */
    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(name: "idUser", referencedColumnName: "id")]
    private ?User $iduser = null;

    /**
     * @var \Moduledeformation
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Moduledeformation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModule", referencedColumnName="id")
     * })
     */
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "NONE")]
    #[ORM\OneToOne(targetEntity: Moduledeformation::class)]
    #[ORM\JoinColumn(name: "idModule", referencedColumnName: "id")]
    private ?Moduledeformation $idmodule = null;


}
