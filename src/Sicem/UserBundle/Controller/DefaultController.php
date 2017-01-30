<?php

namespace Sicem\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SicemUserBundle:Default:index.html.twig');
    }
}
