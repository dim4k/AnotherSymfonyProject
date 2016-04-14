<?php

namespace PeensBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="PeensBundle\Repository\StudentRepository")
 */
class Student extends Person
{
    /**
     *
     * @ORM\OneToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return parent::getId();
    }
}
