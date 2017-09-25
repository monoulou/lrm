<?php

namespace Proxies\__CG__\MA\LrmBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Client extends \MA\LrmBundle\Entity\Client implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'denomination', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'adresse', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'ville', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'departement', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'pays', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'villeCodePostal', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'etat', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'chargeRecrutement', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'commentaire', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'typeClient', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'partenaire', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'dateCreation'];
        }

        return ['__isInitialized__', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'id', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'denomination', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'adresse', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'ville', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'departement', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'pays', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'villeCodePostal', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'civilite3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'nomContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'prenomContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'fonctionContact3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'telephone3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'email3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'etat', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'chargeRecrutement', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'commentaire', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'typeClient', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'partenaire', '' . "\0" . 'MA\\LrmBundle\\Entity\\Client' . "\0" . 'dateCreation'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Client $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDenomination($denomination)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDenomination', [$denomination]);

        return parent::setDenomination($denomination);
    }

    /**
     * {@inheritDoc}
     */
    public function getDenomination()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDenomination', []);

        return parent::getDenomination();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone($telephone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone', [$telephone]);

        return parent::setTelephone($telephone);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone', []);

        return parent::getTelephone();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact($nomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact', [$nomContact]);

        return parent::setNomContact($nomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact', []);

        return parent::getNomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonctionContact($fonctionContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonctionContact', [$fonctionContact]);

        return parent::setFonctionContact($fonctionContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctionContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctionContact', []);

        return parent::getFonctionContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', [$etat]);

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', []);

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setChargeRecrutement(\MA\UserBundle\Entity\User $chargeRecrutement = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChargeRecrutement', [$chargeRecrutement]);

        return parent::setChargeRecrutement($chargeRecrutement);
    }

    /**
     * {@inheritDoc}
     */
    public function getChargeRecrutement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChargeRecrutement', []);

        return parent::getChargeRecrutement();
    }

    /**
     * {@inheritDoc}
     */
    public function setCommentaire($commentaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCommentaire', [$commentaire]);

        return parent::setCommentaire($commentaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommentaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommentaire', []);

        return parent::getCommentaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeClient($typeClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeClient', [$typeClient]);

        return parent::setTypeClient($typeClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeClient', []);

        return parent::getTypeClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateCreation($dateCreation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateCreation', [$dateCreation]);

        return parent::setDateCreation($dateCreation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateCreation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateCreation', []);

        return parent::getDateCreation();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite($civilite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite', [$civilite]);

        return parent::setCivilite($civilite);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite', []);

        return parent::getCivilite();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomContact($prenomContact)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomContact', [$prenomContact]);

        return parent::setPrenomContact($prenomContact);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomContact()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomContact', []);

        return parent::getPrenomContact();
    }

    /**
     * {@inheritDoc}
     */
    public function setVilleCodePostal($villeCodePostal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVilleCodePostal', [$villeCodePostal]);

        return parent::setVilleCodePostal($villeCodePostal);
    }

    /**
     * {@inheritDoc}
     */
    public function getVilleCodePostal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVilleCodePostal', []);

        return parent::getVilleCodePostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement($departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', [$departement]);

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', []);

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPartenaire($partenaire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPartenaire', [$partenaire]);

        return parent::setPartenaire($partenaire);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartenaire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPartenaire', []);

        return parent::getPartenaire();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact2($nomContact2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact2', [$nomContact2]);

        return parent::setNomContact2($nomContact2);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact2', []);

        return parent::getNomContact2();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonctionContact2($fonctionContact2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonctionContact2', [$fonctionContact2]);

        return parent::setFonctionContact2($fonctionContact2);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctionContact2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctionContact2', []);

        return parent::getFonctionContact2();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone2($telephone2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone2', [$telephone2]);

        return parent::setTelephone2($telephone2);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone2', []);

        return parent::getTelephone2();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomContact3($nomContact3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomContact3', [$nomContact3]);

        return parent::setNomContact3($nomContact3);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomContact3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomContact3', []);

        return parent::getNomContact3();
    }

    /**
     * {@inheritDoc}
     */
    public function setFonctionContact3($fonctionContact3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFonctionContact3', [$fonctionContact3]);

        return parent::setFonctionContact3($fonctionContact3);
    }

    /**
     * {@inheritDoc}
     */
    public function getFonctionContact3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFonctionContact3', []);

        return parent::getFonctionContact3();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelephone3($telephone3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelephone3', [$telephone3]);

        return parent::setTelephone3($telephone3);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelephone3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelephone3', []);

        return parent::getTelephone3();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomContact2($prenomContact2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomContact2', [$prenomContact2]);

        return parent::setPrenomContact2($prenomContact2);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomContact2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomContact2', []);

        return parent::getPrenomContact2();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenomContact3($prenomContact3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenomContact3', [$prenomContact3]);

        return parent::setPrenomContact3($prenomContact3);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenomContact3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenomContact3', []);

        return parent::getPrenomContact3();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite2($civilite2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite2', [$civilite2]);

        return parent::setCivilite2($civilite2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite2', []);

        return parent::getCivilite2();
    }

    /**
     * {@inheritDoc}
     */
    public function setCivilite3($civilite3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCivilite3', [$civilite3]);

        return parent::setCivilite3($civilite3);
    }

    /**
     * {@inheritDoc}
     */
    public function getCivilite3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCivilite3', []);

        return parent::getCivilite3();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail2($email2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail2', [$email2]);

        return parent::setEmail2($email2);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail2', []);

        return parent::getEmail2();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail3($email3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail3', [$email3]);

        return parent::setEmail3($email3);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail3', []);

        return parent::getEmail3();
    }

}
