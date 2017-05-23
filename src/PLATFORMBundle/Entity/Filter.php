<?php

namespace PLATFORMBundle\Entity;

/**
 * Filter
 */
class Filter
{
    /**
     * @var int
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
     * Get id
     *
     * @return int
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
     * @return Filter
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
     * @return Filter
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
     * @return Filter
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
}

