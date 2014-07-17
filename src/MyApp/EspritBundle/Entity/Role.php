<?php

namespace MyApp\EspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role")
 * @ORM\Entity
 */
class Role
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
      
   /**
     * @ORM\ManyToOne(targetEntity="Utilisateur", inversedBy="roles", cascade={"remove"})
     * @ORM\JoinColumn(name="utilisateur_id", referencedColumnName="id",nullable=false)
     */
 
   protected $utilisateur;
    /**
     * @var boolean
     *
     * @ORM\Column(name="permission", type="boolean")
     */
    private $permission;
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
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
     * Set permission
     *
     * @param boolean $permission
     * @return Role
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;
    
        return $this;
    }

    /**
     * Get permission
     *
     * @return boolean 
     */
    public function getPermission()
    {
        return $this->permission;
    }
}
