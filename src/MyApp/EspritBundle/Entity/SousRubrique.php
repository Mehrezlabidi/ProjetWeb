<?php

namespace MyApp\EspritBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousRubrique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
<<<<<<< HEAD
class SousRubrique {

=======
class SousRubrique
{
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Rubrique", inversedBy="sousrubriques")
     * @ORM\JoinColumn(name="rubrique_id", referencedColumnName="id",nullable=false)
     */
<<<<<<< HEAD
    protected $rubrique;

    
    protected $article;
=======
 
     protected $rubrique;
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3

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
     * @ORM\Column(name="title", type="string", length=255,unique=true)
     */
    private $title;

<<<<<<< HEAD
=======

>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    /**
     * Get id
     *
     * @return integer 
     */
<<<<<<< HEAD
    public function getId() {
=======
    public function getId()
    {
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this->id;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return SousRubrique
     */
<<<<<<< HEAD
    public function setPosition($position) {
        $this->position = $position;

=======
    public function setPosition($position)
    {
        $this->position = $position;
    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
<<<<<<< HEAD
    public function getPosition() {
=======
    public function getPosition()
    {
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this->position;
    }

    /**
     * Set state
     *
     * @param boolean $state
     * @return SousRubrique
     */
<<<<<<< HEAD
    public function setState($state) {
        $this->state = $state;

=======
    public function setState($state)
    {
        $this->state = $state;
    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this;
    }

    /**
     * Get state
     *
     * @return boolean 
     */
<<<<<<< HEAD
    public function getState() {
=======
    public function getState()
    {
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this->state;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return SousRubrique
     */
<<<<<<< HEAD
    public function setTitle($title) {
        $this->title = $title;

=======
    public function setTitle($title)
    {
        $this->title = $title;
    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
<<<<<<< HEAD
    public function getTitle() {
        return $this->title;
    }

    public function getRubrique() {
=======
    public function getTitle()
    {
        return $this->title;
    }
        public function getRubrique() {
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
        return $this->rubrique;
    }

    public function setRubrique($rubrique) {
        $this->rubrique = $rubrique;
    }
<<<<<<< HEAD

    public function getArticle() {
        return $this->article;
    }

    public function setArticle($article) {
        $this->article = $article;
    }

    public function __toString() {
        return $this->title . '';
    }

=======
  public function getArticles() {
        return $this->articles;
    }

    public function setArticles($articles) {
        $this->articles = $articles;
    }
    
      public function __toString()
    {
           return $this->title.'' ; 
    }
    
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
}
