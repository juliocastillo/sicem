<?php

namespace Sicem\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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

    public function homeAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $empresa_id = $request->get('empresa_id');
        if ($empresa_id != NULL)
        { //Solo sucede cuando se ha decidido abrir una empresa
            $empresa = $em->getRepository('SicemCatalogoBundle:CtlEmpresa')
                          ->find($empresa_id);
            $this->get('session')->set('empresa_id', $empresa->getId());
            $this->get('session')->set('empresa_nombre', $empresa->getNombre());              
        } else { // si se va a ingresar por primera vez o ya hay una empresa abierta
            $empresa_id = $this->get('session')->get('empresa_id');
            if (!$empresa_id){ //si no hay empresa abierta abrir la consolidadora
                $empresa = $em->getRepository('SicemCatalogoBundle:CtlEmpresa')
                              ->findOneBy(array('consolidadora' => TRUE));
            } else { //sino hay empresa abierta abrir continuar con la misma
                $empresa = $em->getRepository('SicemCatalogoBundle:CtlEmpresa')
                              ->find($empresa_id);
            }
            if ($empresa){ //si la consulta retorna una empresa
                $this->get('session')->set('empresa_id', $empresa->getId());
                $this->get('session')->set('empresa_nombre', $empresa->getNombre());
            } else { //si la consulta no retorne ninguna empresa.
                $this->get('session')->set('empresa_id', null);
                $this->get('session')->set('empresa_nombre', 'ninguna empresa consolidadora');
            }
        }
        return $this->render('SicemUserBundle:Security:home.html.twig');
    }
}
