<?php

namespace RestApi\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DefaultController extends FOSRestController
{
    public function getHomesAction()
    {
        $data = array("hello" => "world");
        $view = $this->view($data);
        var_dump($view); exit;
        return $this->handleView($view);
    }
}
