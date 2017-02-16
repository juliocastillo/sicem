<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAnio
 *
 * @ORM\Table(name="ctl_anio")
 * @ORM\Entity
 */
class CtlAnio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=false)
     */
    private $anio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_anio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set anio
     *
     * @param integer $anio
     *
     * @return CtlAnio
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return integer
     */
    public function getAnio()
    {
        return $this->anio;
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

    public function __toString()
    {
        return $this->anio;
    }
}
