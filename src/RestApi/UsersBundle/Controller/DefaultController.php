<?php

namespace RestApi\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $date = new \DateTime('now');
        $now = $date->format('Y-m-d H:i:s');
        return $this->render('UsersBundle:Default:index.html.twig', ['now' => $now]);
    }
}
