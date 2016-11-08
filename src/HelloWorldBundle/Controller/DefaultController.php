<?php

namespace HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/helloworld")
     */
    public function indexAction()
    {
        return $this->render('HelloWorldBundle:Default:index.html.twig');
    }

     /**
     * @Route("/helloworld/{name}")
     */
    public function showAction($name)
    {
        return $this->render('HelloWorldBundle:Default:wildcard.html.twig', ['name'=>$name]);
    }
}
