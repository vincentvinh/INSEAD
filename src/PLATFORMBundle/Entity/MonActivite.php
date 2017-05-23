<?php

namespace PLATFORMBundle\Entity;

/**
 * MonActivite
 */
class MonActivite
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \DateTime
     */
    private $time1;

    /**
     * @var \DateTime
     */
    private $time2;

    /**
     * @var \PLATFORMBundle\Entity\User
     */
    private $profil;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $locations;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $activites;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->activites = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MonActivite
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time1
     *
     * @param \DateTime $time1
     *
     * @return MonActivite
     */
    public function setTime1($time1)
    {
        $this->time1 = $time1;

        return $this;
    }

    /**
     * Get time1
     *
     * @return \DateTime
     */
    public function getTime1()
    {
        return $this->time1;
    }

    /**
     * Set time2
     *
     * @param \DateTime $time2
     *
     * @return MonActivite
     */
    public function setTime2($time2)
    {
        $this->time2 = $time2;

        return $this;
    }

    /**
     * Get time2
     *
     * @return \DateTime
     */
    public function getTime2()
    {
        return $this->time2;
    }

    /**
     * Set profil
     *
     * @param \PLATFORMBundle\Entity\User $profil
     *
     * @return MonActivite
     */
    public function setProfil(\PLATFORMBundle\Entity\User $profil = null)
    {
        $this->profil = $profil;

        return $this;
    }

    /**
     * Get profil
     *
     * @return \PLATFORMBundle\Entity\User
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Add location
     *
     * @param \PLATFORMBundle\Entity\Location $location
     *
     * @return MonActivite
     */
    public function addLocation(\PLATFORMBundle\Entity\Location $location)
    {
        $this->locations[] = $location;

        return $this;
    }

    /**
     * Remove location
     *
     * @param \PLATFORMBundle\Entity\Location $location
     */
    public function removeLocation(\PLATFORMBundle\Entity\Location $location)
    {
        $this->locations->removeElement($location);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add activite
     *
     * @param \PLATFORMBundle\Entity\Activity $activite
     *
     * @return MonActivite
     */
    public function addActivite(\PLATFORMBundle\Entity\Activity $activite)
    {
        $this->activites[] = $activite;

        return $this;
    }

    /**
     * Remove activite
     *
     * @param \PLATFORMBundle\Entity\Activity $activite
     */
    public function removeActivite(\PLATFORMBundle\Entity\Activity $activite)
    {
        $this->activites->removeElement($activite);
    }

    /**
     * Get activites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivites()
    {
        return $this->activites;
    }
}
