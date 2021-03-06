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
     * @ORM\OneToMany(targetEntity="Utilisateur", mappedBy="role")
     */
 
   protected $utilisateurs;
   
    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="role")
     */
 
   protected $articles;
   
    /**
     * @var boolean
     *
     * @ORM\Column(name="permission", type="boolean")
     */
    private $permission;
<<<<<<< HEAD
     
=======
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
    }

>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    
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
    
    public function getUtilisateurs() {
        return $this->utilisateurs;
    }

    public function setUtilisateurs($utilisateurs) {
        $this->utilisateurs = $utilisateurs;
    }

    public function getArticles() {
        return $this->articles;
    }

    public function setArticles($articles) {
        $this->articles = $articles;
    }

     public function __toString()
    {
          return $this-> id.'';
    }
}
