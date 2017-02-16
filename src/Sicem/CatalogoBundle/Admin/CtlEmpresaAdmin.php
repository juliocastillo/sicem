<?php

namespace Sicem\CatalogoBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlEmpresaAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ->add('nitRepresentante')
            ->add('representante')
            ->add('nitContador')
            ->add('contador')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
            ->add('isActive')
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('origen')
            ->add('nombre')
            ->add('consolidadora')
            ->add('createdAt')
            ->add('isActive')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $entity = $this->getSubject();   //obtiene el elemento seleccionado en un objeto
        $id = $entity->getId();
        $formMapper
            ->with('Empresa', array('class' => 'col-md-6'))->end()
            ->with('Datos', array('class' => 'col-md-6'))->end()
            ;
            $formMapper
            ->with('Empresa')
                ->add('origen')
                ->add('nombre')
                ->add('registroFiscal')
                ->add('nit')
                ->add('idTamanioempresa')
                ->add('idPais')
                ->add('idDepartamento')
                ->add('idMunicipio')
                ->end()
            ->with('Datos')
                ->add('consolidadora')
                ->add('nitRepresentante')
                ->add('representante')
                ->add('nitContador')
                ->add('contador');
                if ($id) {  // cuando se edite el registro
                if ($entity->getIsActive() == TRUE) { // si el registro esta activo
                    $formMapper
                            ->add('isActive', null, array('label' => 'Registro activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
                } else { // si el registro esta inactivo
                    $formMapper
                            ->add('isActive', null, array('label' => 'Registro activo', 'required' => FALSE));
                }
            } else { // cuando se crea el registro
                $formMapper
                        ->add('isActive', null, array('label' => 'Registro activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
            }
            ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ->add('nitRepresentante')
            ->add('representante')
            ->add('nitContador')
            ->add('contador')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
            ->add('isActive')
            ->add('id')
        ;
    }

    public function prePersist($val) {
       $userId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
       $val->setCreatedBy($userId);
       $val->setCreatedAt(new \DateTime());

   }


   public function preUpdate($val) {
       $userId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
       $val->setUpdatedBy($userId);
       $val->setUpdatedAt(new \DateTime());

   }

   public function getTemplate($name) {
        switch ($name) {
            case 'edit':
                return 'SicemCatalogoBundle:CRUD:CtlEmpresa/edit.html.twig';
                break;
            default:
                return parent::getTemplate($name);
                break;
        }
    }

}
