<?php //src/Entity/Category.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Category{
    private $id;
    private $name;
    private $jobs; // tableau d'objet Job
    private $affiliates; // tableau d'objet Affiliate

    public function __construct()
    {
        $this->jobes = new ArrayCollection();
        $this->affiliates = new ArrayCollection();
    }


    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of jobs
     */ 
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Set the value of jobs
     *
     * @return  self
     */ 
    public function setJobs($jobs)
    {
        $this->jobs = $jobs;

        return $this;
    }

    /**
     * Get the value of affiliates
     */ 
    public function getAffiliates()
    {
        return $this->affiliates;
    }

    /**
     * Set the value of affiliates
     *
     * @return  self
     */ 
    public function setAffiliates($affiliates)
    {
        $this->affiliates = $affiliates;

        return $this;
    }
}