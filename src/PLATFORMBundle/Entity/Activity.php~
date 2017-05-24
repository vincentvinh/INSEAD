<?php

namespace PLATFORMBundle\Entity;

/**
 * Activity
 */
class Activity
{

    public function __toString()
    {
        return $this->activity;
    }
    // generated
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $activity;

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
     * Set activity
     *
     * @param string $activity
     *
     * @return Activity
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;

        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Add monActivite
     *
     * @param \PLATFORMBundle\Entity\MonActivite $monActivite
     *
     * @return Activity
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
