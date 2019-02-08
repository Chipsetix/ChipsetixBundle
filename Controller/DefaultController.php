<?php

namespace ChipsetixBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Chipsetix/Default/index.html.twig');
    }
}
