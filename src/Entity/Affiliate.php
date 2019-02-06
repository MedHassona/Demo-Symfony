<?php //src/Entity/Affiliate.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class Affiliate
{
    private $id;
    private $categories; // tableau d'objet Category
    private $url;
    private $email;
    private $token;
    private $isActive;
    private $createdAt;

    public function __construct(){
        $this->categories = new ArrayCollection();
    }

    public function setCreatedAtValue(LifecycleEventArgs $event)
    {
        $this->createdAt = new DateTime();
    }

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of categories
     */ 
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set the value of categories
     *
     * @return  self
     */ 
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get the value of token
     */ 
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @return  self
     */ 
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of isActive
     */ 
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Get the value of createdAt
     */ 
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}