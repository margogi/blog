<?php

namespace margogi\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('margogiBlogBundle:Default:index.html.twig');
    }
}
