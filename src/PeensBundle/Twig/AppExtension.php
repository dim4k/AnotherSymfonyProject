<?php
/**
 * Created by PhpStorm.
 * User: padow
 * Date: 15/04/16
 * Time: 15:38
 */

namespace PeensBundle\Twig;

use PeensBundle\Entity\Person;

class AppExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('person', array($this, 'personFilter')),
        );
    }

    public function personFilter(Person $person)
    {
        return "<td>".$person->getFirstname()."</td><td>".$person->getLastname()."</td>";
    }

    public function getName()
    {
        return 'app_extension';
    }

}