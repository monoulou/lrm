<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gestion
 *
 * @ORM\Table(name="gestion")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\GestionRepository")
 */
class Gestion
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
     * @ORM\ManyToOne(targetEntity="MA\LrmBundle\Entity\Candidat", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $candidat;

    /**
     * @ORM\ManyToOne(targetEntity="MA\LrmBundle\Entity\Emploi", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $emploi;

    /**
     * @ORM\ManyToOne(targetEntity="MA\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $chargeRecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_integration", type="string", length=50)
     */
    private $dateIntegration;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Gestion
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
     * Set candidat
     *
     * @param \MA\LrmBundle\Entity\Candidat $candidat
     *
     * @return Gestion
     */
    public function setCandidat(\MA\LrmBundle\Entity\Candidat $candidat = null)
    {
        $this->candidat = $candidat;

        return $this;
    }

    /**
     * Get candidat
     *
     * @return \MA\LrmBundle\Entity\Candidat
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * Set emploi
     *
     * @param \MA\LrmBundle\Entity\Emploi $emploi
     *
     * @return Gestion
     */
    public function setEmploi(\MA\LrmBundle\Entity\Emploi $emploi = null)
    {
        $this->emploi = $emploi;

        return $this;
    }

    /**
     * Get emploi
     *
     * @return \MA\LrmBundle\Entity\Emploi
     */
    public function getEmploi()
    {
        return $this->emploi;
    }

    /**
     * Set chargeRecrutement
     *
     * @param \MA\UserBundle\Entity\User $chargeRecrutement
     *
     * @return Gestion
     */
    public function setChargeRecrutement(\MA\UserBundle\Entity\User $chargeRecrutement = null)
    {
        $this->chargeRecrutement = $chargeRecrutement;

        return $this;
    }

    /**
     * Get chargeRecrutement
     *
     * @return \MA\UserBundle\Entity\User
     */
    public function getChargeRecrutement()
    {
        return $this->chargeRecrutement;
    }

    /**
     * Set dateIntegration
     *
     * @param string $dateIntegration
     *
     * @return Gestion
     */
    public function setDateIntegration($dateIntegration)
    {
        $this->dateIntegration = $dateIntegration;

        return $this;
    }

    /**
     * Get dateIntegration
     *
     * @return string
     */
    public function getDateIntegration()
    {
        return $this->dateIntegration;
    }
}
