<?php

namespace Sicem\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository("SicemUserBundle:CtlUser")->findAll();
        
        $res = 'Lista de usuarios: <br />';
        
        foreach ($users as $user)
        {
            $res .= 'Usuario:'. $user->getUsername(). " - Email;". $user->getEmail(). "<br />";
        }
        return New Response($res);
        
    }
    
    public function homeAction()
    {
        return $this->render('SicemUserBundle:Security:home.html.twig');
    }
}
