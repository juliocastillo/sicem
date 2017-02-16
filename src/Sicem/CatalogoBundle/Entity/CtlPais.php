<?php

namespace Sicem\CatalogoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlPais
 *
 * @ORM\Table(name="ctl_pais")
 * @ORM\Entity
 */
class CtlPais
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
     * @ORM\SequenceGenerator(sequenceName="ctl_pais_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlPais
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
    
    public function __toString() {
        return $this->nombre;
    }

}
