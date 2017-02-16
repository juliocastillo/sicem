<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMunicipio
 *
 * @ORM\Table(name="ctl_municipio", indexes={@ORM\Index(name="IDX_914172ED6325E299", columns={"id_departamento"})})
 * @ORM\Entity
 */
class CtlMunicipio
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_municipio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Sicem\CatalogoBundle\Entity\CtlDepartamento
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlDepartamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_departamento", referencedColumnName="id")
     * })
     */
    private $idDepartamento;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlMunicipio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idDepartamento
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlDepartamento $idDepartamento
     *
     * @return CtlMunicipio
     */
    public function setIdDepartamento(\Sicem\CatalogoBundle\Entity\CtlDepartamento $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlDepartamento
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
    
    
    public function __toString() {
        return $this->nombre;
    }
}
