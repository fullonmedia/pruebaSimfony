<?php

namespace DOG\PruebaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
		$em=$this->getDoctrine()->getManager();
		$users=$em->getRepository("DOGPruebaBundle:User")->findAll();
		$res="users: <br />";
		foreach($users as $user){
			$res.= 'Usuario'.$user->getUsuario().' email:'.$user->getEmail().'<br />';
		}
		
		return new Response($res);
		
        //return $this->render('DOGPruebaBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function viewAction($id){
		//return new Response($id);
		
		$repository=$this->getDoctrine()->getRepository('DOGPruebaBundle:User');
		$user=$repository->find($id);
		return new Response('Usuario'.$user->getUsuario().' email:'.$user->getEmail());
	}
}
