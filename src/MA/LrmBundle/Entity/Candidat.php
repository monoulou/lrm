<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Candidat
 *
 * @ORM\Table(name="candidat")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\CandidatRepository")
 */
class Candidat
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
     * @ORM\Column(name="civilite", type="string", length=255)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_anniversaire", type="string", length=50)
     */
    private $dateAnniversaire;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=50)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="test_perso", type="string", length=50)
     */
    private $testPersonnalite;

    /**
     * @var string
     *
     * @ORM\Column(name="date_relance", type="string", length=50)
     */
    private $dateRelance;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="departement", type="string", length=255)
     *
     */
    private $departement;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=255)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_code_postal", type="string", length=10)
     */
    private $villeCodePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email_adresse", type="string", length=255)
     */
    private $email;

    /**
     * @ORM\ManyToOne(targetEntity="MA\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $chargeRecrutement;

    /**
     * @ORM\ManyToOne(targetEntity="MA\LrmBundle\Entity\Emploi", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $emploi;
    
    /**
     * @var string
     *
     * @ORM\Column(name="cv_candidat", type="string", length = 255)
     * @Assert\NotBlank(message="Insérer un cv au format PDF ou .doc .")
     * @Assert\File(mimeTypes={ "application/pdf", "application/vnd.openxmlformats-officedocument.wordprocessingml.document" })
     */
    private $cvCandidat;


    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length = 2000)
     */
    private $commentaire;

    
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
     * @return int
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
     * @return Client
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
     * Set civilite
     *
     * @param string $civilite
     *
     * @return Candidat
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get civilite
     *
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Candidat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Candidat
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Candidat
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Candidat
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Candidat
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Candidat
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set villeCodePostal
     *
     * @param string $villeCodePostal
     *
     * @return Candidat
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Candidat
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Candidat
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set chargeRecrutement
     *
     * @param \MA\UserBundle\Entity\User $chargeRecrutement
     *
     * @return Candidat
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
     * Set emploi
     *
     * @param \MA\LrmBundle\Entity\Emploi $emploi
     *
     * @return Candidat
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Candidat
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set dateAnniversaire
     *
     * @param string $dateAnniversaire
     *
     * @return Candidat
     */
    public function setDateAnniversaire($dateAnniversaire)
    {
        $this->dateAnniversaire = $dateAnniversaire;

        return $this;
    }

    /**
     * Get dateAnniversaire
     *
     * @return string
     */
    public function getDateAnniversaire()
    {
        return $this->dateAnniversaire;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return Candidat
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set testPersonnalite
     *
     * @param string $testPersonnalite
     *
     * @return Candidat
     */
    public function setTestPersonnalite($testPersonnalite)
    {
        $this->testPersonnalite = $testPersonnalite;

        return $this;
    }

    /**
     * Get testPersonnalite
     *
     * @return string
     */
    public function getTestPersonnalite()
    {
        return $this->testPersonnalite;
    }

    /**
     * Set dateRelance
     *
     * @param string $dateRelance
     *
     * @return Candidat
     */
    public function setDateRelance($dateRelance)
    {
        $this->dateRelance = $dateRelance;

        return $this;
    }

    /**
     * Get dateRelance
     *
     * @return string
     */
    public function getDateRelance()
    {
        return $this->dateRelance;
    }

    /**
     * Set cvCandidat
     *
     * @param string $cvCandidat
     *
     * @return Candidat
     */
    public function setCvCandidat($cvCandidat)
    {
        $this->cvCandidat = $cvCandidat;

        return $this;
    }

    /**
     * Get cvCandidat
     *
     * @return string
     */
    public function getCvCandidat()
    {
        return $this->cvCandidat;
    }
}
