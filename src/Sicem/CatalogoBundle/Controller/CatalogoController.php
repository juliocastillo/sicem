<?php

namespace Sicem\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CatalogoController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SicemCatalogoBundle:Default:index.html.twig');
    }

    public function listarEmpresaAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $empresas = $em->getRepository('SicemCatalogoBundle:CtlEmpresa')->findAll();
        return $this->render('SicemCatalogoBundle:Empresa:listar_empresa.html.twig', array(
            'empresas' => $empresas
        ));
    }
}
