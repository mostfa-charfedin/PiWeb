<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="idQuiz", columns={"idQuiz"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="idQuestion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idquestion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Question", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $question = 'NULL';

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="idQuiz")
     * })
     */
    private $idquiz;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reponse", inversedBy="question")
     * @ORM\JoinTable(name="question_repense",
     *   joinColumns={
     *     @ORM\JoinColumn(name="question_id", referencedColumnName="idQuestion")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="repense_id", referencedColumnName="idReponse")
     *   }
     * )
     */
    private $repense = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->repense = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
