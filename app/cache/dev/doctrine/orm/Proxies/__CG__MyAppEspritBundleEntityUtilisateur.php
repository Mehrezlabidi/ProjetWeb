<?php

namespace Proxies\__CG__\MyApp\EspritBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Utilisateur extends \MyApp\EspritBundle\Entity\Utilisateur implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
<<<<<<< HEAD
    public function getRole()
    {
        $this->__load();
        return parent::getRole();
    }

    public function setRole($role)
    {
        $this->__load();
        return parent::setRole($role);
=======
    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function setRoles($roles)
    {
        $this->__load();
        return parent::setRoles($roles);
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNom($nom)
    {
        $this->__load();
        return parent::setNom($nom);
    }

    public function getNom()
    {
        $this->__load();
        return parent::getNom();
    }

    public function setLogin($login)
    {
        $this->__load();
        return parent::setLogin($login);
    }

    public function getLogin()
    {
        $this->__load();
        return parent::getLogin();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setMail($mail)
    {
        $this->__load();
        return parent::setMail($mail);
    }

    public function getMail()
    {
        $this->__load();
        return parent::getMail();
    }

    public function getMenus()
    {
        $this->__load();
        return parent::getMenus();
    }

    public function getActualites()
    {
        $this->__load();
        return parent::getActualites();
    }

    public function setMenus($menus)
    {
        $this->__load();
        return parent::setMenus($menus);
    }

    public function setActualites($actualites)
    {
        $this->__load();
        return parent::setActualites($actualites);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }


    public function __sleep()
    {
<<<<<<< HEAD
        return array('__isInitialized__', 'id', 'nom', 'login', 'password', 'mail', 'role', 'menus', 'actualites');
=======
        return array('__isInitialized__', 'id', 'nom', 'login', 'password', 'mail', 'roles', 'menus', 'actualites');
>>>>>>> bbf8d3aba2126247b3a80474a93cc08d37f30fc3
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}