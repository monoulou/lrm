<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\DepartementRepository")
 */
class Departement
{

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="departement_code", type="string", length=3, nullable=true)
     */
    private $departementCode;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_nom", type="string", length=255, nullable=true)
     */
    private $departementNom;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_nom_uppercase", type="string", length=255, nullable=true)
     */
    private $departementNomUppercase;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_slug", type="string", length=255, nullable=true)
     */
    private $departementSlug;

    /**
     * @var string
     *
     * @ORM\Column(name="departement_nom_soundex", type="string", length=20, nullable=true)
     */
    private $departementNomSoundex;

    /**
     * @ORM\ManyToOne(targetEntity="MA\LrmBundle\Entity\Pays", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $pays;

    /**
     * Set departementCode
     *
     * @param string $departementCode
     *
     * @return Departement
     */
    public function setDepartementCode($departementCode)
    {
        $this->departementCode = $departementCode;

        return $this;
    }

    /**
     * Get departementCode
     *
     * @return string
     */
    public function getDepartementCode()
    {
        return $this->departementCode;
    }

    /**
     * Set departementNom
     *
     * @param string $departementNom
     *
     * @return Departement
     */
    public function setDepartementNom($departementNom)
    {
        $this->departementNom = $departementNom;

        return $this;
    }

    /**
     * Get departementNom
     *
     * @return string
     */
    public function getDepartementNom()
    {
        return $this->departementNom;
    }

    /**
     * Set departementNomUppercase
     *
     * @param string $departementNomUppercase
     *
     * @return Departement
     */
    public function setDepartementNomUppercase($departementNomUppercase)
    {
        $this->departementNomUppercase = $departementNomUppercase;

        return $this;
    }

    /**
     * Get departementNomUppercase
     *
     * @return string
     */
    public function getDepartementNomUppercase()
    {
        return $this->departementNomUppercase;
    }

    /**
     * Set departementSlug
     *
     * @param string $departementSlug
     *
     * @return Departement
     */
    public function setDepartementSlug($departementSlug)
    {
        $this->departementSlug = $departementSlug;

        return $this;
    }

    /**
     * Get departementSlug
     *
     * @return string
     */
    public function getDepartementSlug()
    {
        return $this->departementSlug;
    }

    /**
     * Set departementNomSoundex
     *
     * @param string $departementNomSoundex
     *
     * @return Departement
     */
    public function setDepartementNomSoundex($departementNomSoundex)
    {
        $this->departementNomSoundex = $departementNomSoundex;

        return $this;
    }

    /**
     * Get departementNomSoundex
     *
     * @return string
     */
    public function getDepartementNomSoundex()
    {
        return $this->departementNomSoundex;
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
     * Set pays
     *
     * @param \MA\LrmBundle\Entity\Pays $pays
     *
     * @return Departement
     */
    public function setPays(\MA\LrmBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \MA\LrmBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
