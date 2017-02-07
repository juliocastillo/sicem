<?php

namespace Sicem\UserBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Sicem\UserBundle\Entity\CtlUser as User;


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
        // consuta a la base para traer los roles y formar el array
        $em     = $this->getConfigurationPool()->getContainer()->get('doctrine')->getManager();//obtengo el manager
        $roles  = $em->getRepository('SicemUserBundle:CtlUserRole')->findAll();
        
        /* contruir el array de roles para desplegarlos en el admin */
        $roles_array = array();
        foreach ($roles As $role){
            $roles_array[$role->getRole()] = $role->getRole();
        }

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
                ->add('role', 'choice', array(
                    'choices' => $roles_array
                    )                        
                );
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
        $userId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $val->setCreatedBy($userId);
        $val->setCreatedAt(new \DateTime());
        
        $user = new User();
        $password = $val->getPassword();
        $encoder = $this->getConfigurationPool()->getContainer()->get('security.password_encoder');
        $encoded = $encoder->encodePassword($user, $password);
        
        $val->setPassword($encoded);
                
    }
    
    
    public function preUpdate($val) {
        $userId = $this->getConfigurationPool()->getContainer()->get('security.token_storage')->getToken()->getUser()->getId();
        $val->setUpdatedBy($userId);
        $val->setUpdatedAt(new \DateTime());
        
//        $user = new User();
//        $password = $val->getPassword();
//        $encoder = $this->getConfigurationPool()->getContainer()->get('security.password_encoder');
//        $encoded = $encoder->encodePassword($user, $password);
//        
//        $val->setPassword($encoded);
    }
}
