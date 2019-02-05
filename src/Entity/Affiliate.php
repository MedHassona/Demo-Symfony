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
}