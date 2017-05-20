<?php

namespace PLATFORMBundle\Entity;

/**
 * Activity
 */
class Activity
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $activity;


    /**
     * Get id
     *
     * @return int
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
}

