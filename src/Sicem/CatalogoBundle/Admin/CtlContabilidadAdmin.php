<?php

namespace Sicem\CatalogoBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlContabilidadAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('tamanioCtaMayor')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
            ->add('isActive')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('tamanioCtaMayor')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
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
        $formMapper
            ->add('tamanioCtaMayor')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
            ->add('isActive')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('tamanioCtaMayor')
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
            ->add('isActive')
        ;
    }
}
