<?php

namespace Sicem\UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlUserAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('username')
                ->add('firstName')
                ->add('lastName')
                ->add('email')
                ->add('role')
                ->add('isActive')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('username', null, array(
                    'label' => 'Usuario'))
                ->add('firstName', null, array(
                    'label' => 'Nombre'))
                ->add('lastName', null, array(
                    'label' => 'Apellido'))
                ->add('email')
                ->add('role')
                ->add('isActive', null, array(
                    'label' => 'EsActivo'))
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
    protected function configureFormFields(FormMapper $formMapper) {
        $entity = $this->getSubject();   //obtiene el elemento seleccionado en un objeto
        $id = $entity->getId();
        $formMapper
                ->add('username', null, array(
                    'label' => 'Usuario'))
                ->add('firstName', null, array(
                    'label' => 'Nombre'))
                ->add('lastName', null, array(
                    'label' => 'Apellido'))
                ->add('email', null, array(
                    'label' => 'email'));
        if (!$id) {  // cuando se edite el registro
            $formMapper
                    ->add('password', null, array(
                        'label' => 'Password'));
        }
        $formMapper
                ->add('role', null, array(
                    'label' => 'Rol'));
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
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('username')
                ->add('firstName')
                ->add('lastName')
                ->add('email')
        ;
    }

    
    
     /*
     * Metodos que se ejecuta antes de realizar una actualizacion.
     * Recibe como parametro una entidad; en este caso de tipo CtlPais
     * con los valores del formulario.
     * 
     */

     public function prePersist($val) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $val->setCreatedBy($user);
        $val->setCreatedAt(new \DateTime());
    }
    
    
    public function preUpdate($val) {
        $user = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $val->setUpdatedBy($user);
        $val->setUpdatedAt(new \DateTime());
    }
}
