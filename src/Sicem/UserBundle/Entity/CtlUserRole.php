<?php

namespace Sicem\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlUserRole
 *
 * @ORM\Table(name="ctl_user_role")
 * @ORM\Entity
 */
class CtlUserRole
{
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=50, nullable=true)
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_user_role_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;



    /**
     * Set role
     *
     * @param string $role
     *
     * @return CtlUserRole
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
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
        return $this->role;
    }
}
