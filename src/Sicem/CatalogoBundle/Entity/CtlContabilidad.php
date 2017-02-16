<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlContabilidad
 *
 * @ORM\Table(name="ctl_contabilidad", indexes={@ORM\Index(name="IDX_4AD956562851975", columns={"id_anio"}), @ORM\Index(name="IDX_4AD95656664AF320", columns={"id_empresa"})})
 * @ORM\Entity
 */
class CtlContabilidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tamanio_cta_mayor", type="smallint", nullable=false)
     */
    private $tamanioCtaMayor;

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
     * @ORM\SequenceGenerator(sequenceName="ctl_contabilidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Sicem\CatalogoBundle\Entity\CtlEmpresa
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlEmpresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_empresa", referencedColumnName="id")
     * })
     */
    private $idEmpresa;

    /**
     * @var \Sicem\CatalogoBundle\Entity\CtlAnio
     *
     * @ORM\ManyToOne(targetEntity="Sicem\CatalogoBundle\Entity\CtlAnio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_anio", referencedColumnName="id")
     * })
     */
    private $idAnio;



    /**
     * Set tamanioCtaMayor
     *
     * @param integer $tamanioCtaMayor
     *
     * @return CtlContabilidad
     */
    public function setTamanioCtaMayor($tamanioCtaMayor)
    {
        $this->tamanioCtaMayor = $tamanioCtaMayor;

        return $this;
    }

    /**
     * Get tamanioCtaMayor
     *
     * @return integer
     */
    public function getTamanioCtaMayor()
    {
        return $this->tamanioCtaMayor;
    }

    /**
     * Set createdBy
     *
     * @param integer $createdBy
     *
     * @return CtlContabilidad
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
     * @return CtlContabilidad
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
     * @return CtlContabilidad
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
     * @return CtlContabilidad
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
     * @return CtlContabilidad
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
     * Set idEmpresa
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlEmpresa $idEmpresa
     *
     * @return CtlContabilidad
     */
    public function setIdEmpresa(\Sicem\CatalogoBundle\Entity\CtlEmpresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idAnio
     *
     * @param \Sicem\CatalogoBundle\Entity\CtlAnio $idAnio
     *
     * @return CtlContabilidad
     */
    public function setIdAnio(\Sicem\CatalogoBundle\Entity\CtlAnio $idAnio = null)
    {
        $this->idAnio = $idAnio;

        return $this;
    }

    /**
     * Get idAnio
     *
     * @return \Sicem\CatalogoBundle\Entity\CtlAnio
     */
    public function getIdAnio()
    {
        return $this->idAnio;
    }
}
