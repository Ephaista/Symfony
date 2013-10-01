<?php

namespace NF\GsbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		return $this->container->get('templating')->renderResponse('NFGsbBundle:Default:index.html.twig');
    }
	
	 public function visiteurAction()
    {   
        $em=$this->getDoctrine()->getEntityManager();
        $liste=$em->getRepository('NFGsbBundle:visiteur')->findAll();
        return $this->container->get('templating')->renderResponse('NFGsbBundle:Default:visiteur.html.twig',array('laListe' => $liste));
    }
}
