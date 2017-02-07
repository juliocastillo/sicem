<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlEmpresa
 *
 * @ORM\Table(name="ctl_empresa")
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
}
