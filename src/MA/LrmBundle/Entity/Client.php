<?php

namespace MA\LrmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="MA\LrmBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="denomination", type="string", length=255)
     */
    private $denomination;

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
     * @ORM\Column(name="nom_contact", type="string", length=255, nullable = true)
     */
    private $nomContact;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction_contact", type="string", length=255, nullable = true)
     */
    private $fonctionContact;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="MA\UserBundle\Entity\User", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotBlank()
     */
    private $chargeRecrutement;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length = 2000, nullable = true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="type_client", type="string", length=255)
     */
    private $typeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="partenaire", type="string", length=255)
     */
    private $partenaire;

    /**
     * @var string
     *
     * @ORM\Column(name="email_adresse", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=255, nullable = true)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_contact", type="string", length=255, nullable = true)
     */
    private $prenomContact;


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
     * Set denomination
     *
     * @param string $denomination
     *
     * @return Client
     */
    public function setDenomination($denomination)
    {
        $this->denomination = $denomination;

        return $this;
    }

    /**
     * Get denomination
     *
     * @return string
     */
    public function getDenomination()
    {
        return $this->denomination;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Client
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
     * Set nomContact
     *
     * @param string $nomContact
     *
     * @return Client
     */
    public function setNomContact($nomContact)
    {
        $this->nomContact = $nomContact;

        return $this;
    }

    /**
     * Get nomContact
     *
     * @return string
     */
    public function getNomContact()
    {
        return $this->nomContact;
    }

    /**
     * Set fonctionContact
     *
     * @param string $fonctionContact
     *
     * @return Client
     */
    public function setFonctionContact($fonctionContact)
    {
        $this->fonctionContact = $fonctionContact;

        return $this;
    }

    /**
     * Get fonctionContact
     *
     * @return string
     */
    public function getFonctionContact()
    {
        return $this->fonctionContact;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Client
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }
    
    /**
     * Set chargeRecrutement
     *
     * @param \MA\UserBundle\Entity\User $chargeRecrutement
     *
     * @return Client
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Client
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
     * Set typeClient
     *
     * @param string $typeClient
     *
     * @return Client
     */
    public function setTypeClient($typeClient)
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    /**
     * Get typeClient
     *
     * @return string
     */
    public function getTypeClient()
    {
        return $this->typeClient;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
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
     * @return Client
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
     * Set prenomContact
     *
     * @param string $prenomContact
     *
     * @return Client
     */
    public function setPrenomContact($prenomContact)
    {
        $this->prenomContact = $prenomContact;

        return $this;
    }

    /**
     * Get prenomContact
     *
     * @return string
     */
    public function getPrenomContact()
    {
        return $this->prenomContact;
    }

    /**
     * Set villeCodePostal
     *
     * @param string $villeCodePostal
     *
     * @return Client
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Client
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
     * @return Client
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
     * @return Client
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
     * Set partenaire
     *
     * @param string $partenaire
     *
     * @return Client
     */
    public function setPartenaire($partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return string
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
}
