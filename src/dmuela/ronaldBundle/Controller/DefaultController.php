<?php

namespace dmuela\ronaldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('dmuelaronaldBundle:Default:index.html.twig', array('name' => $name));
    }
}
