<?php

namespace Proxies\__CG__\MA\LrmBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pays extends \MA\LrmBundle\Entity\Pays implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'id', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'code', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'alpha2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'alpha3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'nomEnGb', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'nomFrFr'];
        }

        return ['__isInitialized__', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'id', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'code', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'alpha2', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'alpha3', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'nomEnGb', '' . "\0" . 'MA\\LrmBundle\\Entity\\Pays' . "\0" . 'nomFrFr'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pays $proxy) {
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
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlpha2($alpha2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlpha2', [$alpha2]);

        return parent::setAlpha2($alpha2);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlpha2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlpha2', []);

        return parent::getAlpha2();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlpha3($alpha3)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlpha3', [$alpha3]);

        return parent::setAlpha3($alpha3);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlpha3()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlpha3', []);

        return parent::getAlpha3();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomEnGb($nomEnGb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomEnGb', [$nomEnGb]);

        return parent::setNomEnGb($nomEnGb);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomEnGb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomEnGb', []);

        return parent::getNomEnGb();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomFrFr($nomFrFr)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomFrFr', [$nomFrFr]);

        return parent::setNomFrFr($nomFrFr);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomFrFr()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomFrFr', []);

        return parent::getNomFrFr();
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

}
