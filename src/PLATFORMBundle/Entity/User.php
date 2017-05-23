<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 13/05/17
 * Time: 18:11
 */


namespace PLATFORMBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

class User extends BaseUser
{

    protected $id;


    public function setEmail($email)
    {
            $email =is_null($email) ? '' : $email;
            parent::setEmail($email);
            $this->setUsername($email);
            return $this;
    }

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $company;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $insead;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $monActivites;


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return User
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set insead
     *
     * @param string $insead
     *
     * @return User
     */
    public function setInsead($insead)
    {
        $this->insead = $insead;

        return $this;
    }

    /**
     * Get insead
     *
     * @return string
     */
    public function getInsead()
    {
        return $this->insead;
    }

    /**
     * Add monActivite
     *
     * @param \PLATFORMBundle\Entity\MonActivite $monActivite
     *
     * @return User
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
