<?php

namespace Sicem\CatalogoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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


    public function paisDepartamentosAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT id, nombre FROM ctl_departamento WHERE id_pais = :id";

        $stm = $this->container->get('database_connection')->prepare($sql);
        $stm->bindValue(':id', $id);
        $stm->execute();
        $result = $stm->fetchAll();

        return new Response(json_encode($result));
    }

    public function deptoMunicipiosAction(Request $request) {
        $id = $request->get('id');
    	$em = $this->getDoctrine()->getManager();
        $sql = "SELECT id, nombre FROM ctl_municipio WHERE id_departamento = :id";

        $stm = $this->container->get('database_connection')->prepare($sql);
        $stm->bindValue(':id', $id);
        $stm->execute();
        $result = $stm->fetchAll();

        return new Response(json_encode($result));
    }


}
