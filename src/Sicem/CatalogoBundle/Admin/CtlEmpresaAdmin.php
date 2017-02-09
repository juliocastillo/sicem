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
            ->add('isActive')
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
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
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
            ->add('origen')
            ->add('nombre')
            ->add('registroFiscal')
            ->add('nit')
            ->add('consolidadora')
            ->add('isActive')
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
            ->add('isActive')
        ;
    }
}
