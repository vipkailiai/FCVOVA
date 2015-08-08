<?php

namespace DoctrineProxies\__CG__\Concrete\Package\Football\Src\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class League extends \Concrete\Package\Football\Src\Entity\League implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', array($name));

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', array($name, $value));

        return parent::__set($name, $value);
    }



    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'id', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'name', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'year', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_victory', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_draw', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_defeat', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'promotion', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'qualifying', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'relegation', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'default_time', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'nb_starter', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'nb_bench', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'teams', 'protect', 'protectRead', 'protectWrite');
        }

        return array('__isInitialized__', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'id', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'name', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'year', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_victory', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_draw', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'pt_defeat', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'promotion', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'qualifying', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'relegation', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'default_time', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'nb_starter', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'nb_bench', '' . "\0" . 'Concrete\\Package\\Football\\Src\\Entity\\League' . "\0" . 'teams', 'protect', 'protectRead', 'protectWrite');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (League $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getYear()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYear', array());

        return parent::getYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setYear($year)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYear', array($year));

        return parent::setYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function getPtVictory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPtVictory', array());

        return parent::getPtVictory();
    }

    /**
     * {@inheritDoc}
     */
    public function setPtVictory($pt_victory)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPtVictory', array($pt_victory));

        return parent::setPtVictory($pt_victory);
    }

    /**
     * {@inheritDoc}
     */
    public function getPtDraw()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPtDraw', array());

        return parent::getPtDraw();
    }

    /**
     * {@inheritDoc}
     */
    public function setPtDraw($pt_draw)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPtDraw', array($pt_draw));

        return parent::setPtDraw($pt_draw);
    }

    /**
     * {@inheritDoc}
     */
    public function getPtDefeat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPtDefeat', array());

        return parent::getPtDefeat();
    }

    /**
     * {@inheritDoc}
     */
    public function setPtDefeat($pt_defeat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPtDefeat', array($pt_defeat));

        return parent::setPtDefeat($pt_defeat);
    }

    /**
     * {@inheritDoc}
     */
    public function getPromotion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPromotion', array());

        return parent::getPromotion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPromotion($promotion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPromotion', array($promotion));

        return parent::setPromotion($promotion);
    }

    /**
     * {@inheritDoc}
     */
    public function getQualifying()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQualifying', array());

        return parent::getQualifying();
    }

    /**
     * {@inheritDoc}
     */
    public function setQualifying($qualifying)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQualifying', array($qualifying));

        return parent::setQualifying($qualifying);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelegation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelegation', array());

        return parent::getRelegation();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelegation($relegation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelegation', array($relegation));

        return parent::setRelegation($relegation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultTime', array());

        return parent::getDefaultTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultTime($default_time)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultTime', array($default_time));

        return parent::setDefaultTime($default_time);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbStarter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbStarter', array());

        return parent::getNbStarter();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbStarter($nb_starter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbStarter', array($nb_starter));

        return parent::setNbStarter($nb_starter);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbBench()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbBench', array());

        return parent::getNbBench();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbBench($nb_bench)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbBench', array($nb_bench));

        return parent::setNbBench($nb_bench);
    }

    /**
     * {@inheritDoc}
     */
    public function setDeadline($deadline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeadline', array($deadline));

        return parent::setDeadline($deadline);
    }

    /**
     * {@inheritDoc}
     */
    public function add()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'add', array());

        return parent::add();
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'delete', array());

        return parent::delete();
    }

    /**
     * {@inheritDoc}
     */
    public function get($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'get', array($name));

        return parent::get($name);
    }

    /**
     * {@inheritDoc}
     */
    public function set($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'set', array($name, $value));

        return parent::set($name, $value);
    }

}
