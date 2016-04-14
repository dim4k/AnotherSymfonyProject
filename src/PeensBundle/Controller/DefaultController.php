<?php

namespace PeensBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PeensBundle:Default:index.html.twig');
    }
}
