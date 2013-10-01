<?php

namespace NF\MonPremierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $message = '2.3.3';
        return $this->container->get('templating')-> renderResponse('NFMonPremierBundle:Default:index.html.twig',array('message'=> $message));
    }
}
