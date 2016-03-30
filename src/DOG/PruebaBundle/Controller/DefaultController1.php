<?php

namespace DOG\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController1 extends Controller
{
    public function indexAction()
    {
        return $this->render('DOGPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
}
