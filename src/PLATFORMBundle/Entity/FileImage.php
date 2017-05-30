<?php

namespace PLATFORMBundle\Entity;




/**
 * File
 */
class FileImage
{
    /**
     * @param int $id
     */
    public function __toString()
    {
        return $this->filename;
    }
    
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $alt;

    /**
     * @var \PLATFORMBundle\Entity\User
     */
    private $fichier;


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
     * Set filename
     *
     * @param string $filename
     *
     * @return FileImage
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return FileImage
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return FileImage
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }

    /**
     * Set fichier
     *
     * @param \PLATFORMBundle\Entity\User $fichier
     *
     * @return FileImage
     */
    public function setFichier(\PLATFORMBundle\Entity\User $fichier = null)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return \PLATFORMBundle\Entity\User
     */
    public function getFichier()
    {
        return $this->fichier;
    }
}
