<?php

namespace MyApp\EspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousRubrique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class SousRubrique
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
     * @ORM\OneToMany(targetEntity="Article", mappedBy="SousRubrique", cascade={"remove", "persist"})
     */
    protected $articles;

          /**
     * @ORM\ManyToOne(targetEntity="Rubrique", inversedBy="sousrubriques", cascade={"remove"})
     * @ORM\JoinColumn(name="rubrique_id", referencedColumnName="id")
     */
 
     protected $rubrique;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @var boolean
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


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
     * Set position
     *
     * @param integer $position
     * @return SousRubrique
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return SousRubrique
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return SousRubrique
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }
        public function getRubrique() {
        return $this->rubrique;
    }

    public function setRubrique($rubrique) {
        $this->rubrique = $rubrique;
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
