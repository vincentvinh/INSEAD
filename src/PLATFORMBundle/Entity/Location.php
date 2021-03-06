<?php

namespace PLATFORMBundle\Entity;

/**
 * Location
 */
class Location
{
    public function __toString()
    {
       return $this->location;
    }
    // generated
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $location;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monActivites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->monActivites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set location
     *
     * @param string $location
     *
     * @return Location
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Add monActivite
     *
     * @param \PLATFORMBundle\Entity\MonActivite $monActivite
     *
     * @return Location
     */
    public function addMonActivite(\PLATFORMBundle\Entity\MonActivite $monActivite)
    {
        $this->monActivites[] = $monActivite;

        return $this;
    }

    /**
     * Remove monActivite
     *
     * @param \PLATFORMBundle\Entity\MonActivite $monActivite
     */
    public function removeMonActivite(\PLATFORMBundle\Entity\MonActivite $monActivite)
    {
        $this->monActivites->removeElement($monActivite);
    }

    /**
     * Get monActivites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMonActivites()
    {
        return $this->monActivites;
    }
}
