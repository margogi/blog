<?php

namespace margogi\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagManagementController extends Controller
{

    public function indexAction()
    {
        $em     = $this->getDoctrine()->getManager(); // Para recuperar el servicio de la BD
        $tags   = $em->getRepository('margogiBlogBundle:Tag')->findAll();

        return $this->render('margogiBlogBundle:TagManagement:index.html.twig', array('tags' => $tags));
    }



}