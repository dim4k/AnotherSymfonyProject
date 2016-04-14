<?php

namespace PeensBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="PeensBundle\Repository\NoteRepository")
 */
class Note
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float", nullable=true)
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumn(name="session_id", referencedColumnName="id", nullable=false)
     */
    protected $session;

    /**
     * @ORM\ManyToOne(targetEntity="Student")
     * @ORM\JoinColumn(name="student_id", referencedColumnName="id", nullable=false)
     */
    protected $student;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set note
     *
     * @param float $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set session
     *
     * @param Session
     * @return Note
     */
    public function setSession(Session $session)
    {
        $this->session = $session;
        return $this;
    }
    /**
     * Get session
     *
     * @return Note
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set student
     *
     * @param Student
     * @return Note
     */
    public function setStudent(Student $student)
    {
        $this->student = $student;
        return $this;
    }
    /**
     * Get student
     *
     * @return Note
     */
    public function getStudent()
    {
        return $this->student;
    }

}
