<?php

namespace DOG\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
		return new Response ("bienvenido");
        //return $this->render('DOGPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
}
