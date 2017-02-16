<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEmpresa
 *
 * @ORM\Table(name="ctl_empresa", indexes={@ORM\Index(name="IDX_4EF972C3F57D32FD", columns={"id_pais"}), @ORM\Index(name="IDX_4EF972C36325E299", columns={"id_departamento"}), @ORM\Index(name="IDX_4EF972C37EAD49C7", columns={"id_municipio"}), @ORM\Index(name="IDX_4EF972C3F842EB5F", columns={"id_tamanioempresa"})})
 * @ORM\Entity
 */
class CtlEmpresa
{
    /**
     * @var string
     *
     * @ORM\Column(name="origen", type="string", length=3, nullable=true)
     */
    private $origen;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=80, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="registro_fiscal", type="string", length=15, nullable=true)
     */
    private $registroFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="nit", type="string", length=14, nullable=true)
     */
    private $nit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="consolidadora", type="boolean", nullable=true)
     */
    private $consolidadora;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_representante", type="string", length=14, nullable=true)
     */
    private $nitRepresentante;

    /**
     * @var string
     *
     * @ORM\Column(name="representante", type="string", length=80, nullable=true)
     */
    private $representante;

    /**
     * @var string
     *
     * @ORM\Column(name="nit_contador", type="string", length=14, nullable=true)
     */
    private $nitContador;

    /**
     * @var string
     *
     * @ORM\Column(name="contador", type="string", length=80, nullable=true)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", nullable=true)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_empresa_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Sicem\CatalogoBundle\Entity\CtlTamanio
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlTamanio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tamanioempresa", referencedColumnName="id")
     * })
     */
    private $idTamanioempresa;

    /**
     * @var \Sicem\CatalogoBundle\Entity\CtlMunicipio
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlMunicipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_municipio", referencedColumnName="id")
     * })
     */
    private $idMunicipio;

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
     * @var \Sicem\CatalogoBundle\Entity\CtlPais
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlPais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pais", referencedColumnName="id")
     * })
     */
    private $idPais;



    /**
     * Set origen
     *
     * @param string $origen
     *
     * @return CtlEmpresa
     */
    public function setOrigen($origen)
    {
        $this->origen = $origen;

        return $this;
    }

    /**
     * Get origen
     *
     * @return string
     */
    public function getOrigen()
    {
        return $this->origen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlEmpresa
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
     * Set registroFiscal
     *
     * @param string $registroFiscal
     *
     * @return CtlEmpresa
     */
    public function setRegistroFiscal($registroFiscal)
    {
        $this->registroFiscal = $registroFiscal;

        return $this;
    }

    /**
     * Get registroFiscal
     *
     * @return string
     */
    public function getRegistroFiscal()
    {
        return $this->registroFiscal;
    }

    /**
     * Set nit
     *
     * @param string $nit
     *
     * @return CtlEmpresa
     */
    public function setNit($nit)
    {
        $this->nit = $nit;

        return $this;
    }

    /**
     * Get nit
     *
     * @return string
     */
    public function getNit()
    {
        return $this->nit;
    }

    /**
     * Set consolidadora
     *
     * @param boolean $consolidadora
     *
     * @return CtlEmpresa
     */
    public function setConsolidadora($consolidadora)
    {
        $this->consolidadora = $consolidadora;

        return $this;
    }

    /**
     * Get consolidadora
     *
     * @return boolean
     */
    public function getConsolidadora()
    {
        return $this->consolidadora;
    }

    /**
     * Set nitRepresentante
     *
     * @param string $nitRepresentante
     *
     * @return CtlEmpresa
     */
    public function setNitRepresentante($nitRepresentante)
    {
        $this->nitRepresentante = $nitRepresentante;

        return $this;
    }

    /**
     * Get nitRepresentante
     *
     * @return string
     */
    public function getNitRepresentante()
    {
        return $this->nitRepresentante;
    }

    /**
     * Set representante
     *
     * @param string $representante
     *
     * @return CtlEmpresa
     */
    public function setRepresentante($representante)
    {
        $this->representante = $representante;

        return $this;
    }

    /**
     * Get representante
     *
     * @return string
     */
    public function getRepresentante()
    {
        return $this->representante;
    }

    /**
     * Set nitContador
     *
     * @param string $nitContador
     *
     * @return CtlEmpresa
     */
    public function setNitContador($nitContador)
    {
        $this->nitContador = $nitContador;

        return $this;
    }

    /**
     * Get nitContador
     *
     * @return string
     */
    public function getNitContador()
    {
        return $this->nitContador;
    }

    /**
     * Set contador
     *
     * @param string $contador
     *
     * @return CtlEmpresa
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return string
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return CtlEmpresa
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return CtlEmpresa
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedBy
     *
     * @param integer $updatedBy
     *
     * @return CtlEmpresa
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return CtlEmpresa
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return CtlEmpresa
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
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
     * Set idTamanioempresa
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlTamanio $idTamanioempresa
     *
     * @return CtlEmpresa
     */
    public function setIdTamanioempresa(\Sicem\CatalogoBundle\Entity\CtlTamanio $idTamanioempresa = null)
    {
        $this->idTamanioempresa = $idTamanioempresa;

        return $this;
    }

    /**
     * Get idTamanioempresa
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlTamanio
     */
    public function getIdTamanioempresa()
    {
        return $this->idTamanioempresa;
    }

    /**
     * Set idMunicipio
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlMunicipio $idMunicipio
     *
     * @return CtlEmpresa
     */
    public function setIdMunicipio(\Sicem\CatalogoBundle\Entity\CtlMunicipio $idMunicipio = null)
    {
        $this->idMunicipio = $idMunicipio;

        return $this;
    }

    /**
     * Get idMunicipio
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlMunicipio
     */
    public function getIdMunicipio()
    {
        return $this->idMunicipio;
    }

    /**
     * Set idDepartamento
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlDepartamento $idDepartamento
     *
     * @return CtlEmpresa
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

    /**
     * Set idPais
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlPais $idPais
     *
     * @return CtlEmpresa
     */
    public function setIdPais(\Sicem\CatalogoBundle\Entity\CtlPais $idPais = null)
    {
        $this->idPais = $idPais;

        return $this;
    }

    /**
     * Get idPais
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlPais
     */
    public function getIdPais()
    {
        return $this->idPais;
    }
}
