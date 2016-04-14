<?php

namespace PeensBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Table(name="teacher")
 * @ORM\Entity(repositoryClass="PeensBundle\Repository\TeacherRepository")
 */
class Teacher extends Person
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
