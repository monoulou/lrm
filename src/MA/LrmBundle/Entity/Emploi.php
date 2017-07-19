<?php

namespace MA\LrmBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\EmploiRepository")
 */
class Emploi
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="contrat", type="string", length=255)
     */
    private $contrat;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length = 2000)
     */
    private $description;

    /**
     * @var array
     *
     * @ORM\Column(name="site_parution",  type="array", nullable=true)
     */
    private $siteParution;


    /**
     * @var string
     *
     * @ORM\Column(name="ville_code_postal", type="string", length=10)
     */
    private $villeCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_activite", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $villeActivite;

    /**
     * @ORM\ManyToOne(targetEntity="MA\LrmBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $client;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_poste", type="integer", length=5)
     * @Assert\NotBlank()
     */
    private $nombrePoste;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date")
     */
    private $dateCreation;

    public function __construct() {
        $this->dateCreation = new \DateTime;
    }

    /**
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Emploi
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set contrat
     *
     * @param string $contrat
     *
     * @return Emploi
     */
    public function setContrat($contrat)
    {
        $this->contrat = $contrat;

        return $this;
    }

    /**
     * Get contrat
     *
     * @return string
     */
    public function getContrat()
    {
        return $this->contrat;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Emploi
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Emploi
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
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
     * Set client
     *
     * @param \MA\LrmBundle\Entity\Client $client
     *
     * @return Emploi
     */
    public function setClient(\MA\LrmBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \MA\LrmBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set siteParution
     *
     * @param array $siteParution
     *
     * @return Emploi
     */
    public function setSiteParution($siteParution)
    {
        $this->siteParution = $siteParution;

        return $this;
    }

    /**
     * Get siteParution
     *
     * @return array
     */
    public function getSiteParution()
    {
        return $this->siteParution;
    }
    

    /**
     * Set villeCodePostal
     *
     * @param string $villeCodePostal
     *
     * @return Emploi
     */
    public function setVilleCodePostal($villeCodePostal)
    {
        $this->villeCodePostal = $villeCodePostal;

        return $this;
    }

    /**
     * Get villeCodePostal
     *
     * @return string
     */
    public function getVilleCodePostal()
    {
        return $this->villeCodePostal;
    }
    

    /**
     * Set villeActivite
     *
     * @param string $villeActivite
     *
     * @return Emploi
     */
    public function setVilleActivite($villeActivite)
    {
        $this->villeActivite = $villeActivite;

        return $this;
    }

    /**
     * Get villeActivite
     *
     * @return string
     */
    public function getVilleActivite()
    {
        return $this->villeActivite;
    }
    

    /**
     * Set nombrePoste
     *
     * @param integer $nombrePoste
     *
     * @return Emploi
     */
    public function setNombrePoste($nombrePoste)
    {
        $this->nombrePoste = $nombrePoste;

        return $this;
    }

    /**
     * Get nombrePoste
     *
     * @return integer
     */
    public function getNombrePoste()
    {
        return $this->nombrePoste;
    }
}
