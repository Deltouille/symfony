<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agent extends \App\Entity\Agent implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'DateNaissance', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'codeIdentification', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'missions', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'Nationnalite', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'specialites'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'prenom', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'DateNaissance', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'codeIdentification', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'missions', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'Nationnalite', '' . "\0" . 'App\\Entity\\Agent' . "\0" . 'specialites'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Agent $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function validationNationnaliteAgentMission(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validationNationnaliteAgentMission', [$context]);

        return parent::validationNationnaliteAgentMission($context);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom(string $prenom): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateNaissance(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateNaissance', []);

        return parent::getDateNaissance();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateNaissance(\DateTimeInterface $DateNaissance): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateNaissance', [$DateNaissance]);

        return parent::setDateNaissance($DateNaissance);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeIdentification(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeIdentification', []);

        return parent::getCodeIdentification();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeIdentification(string $codeIdentification): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeIdentification', [$codeIdentification]);

        return parent::setCodeIdentification($codeIdentification);
    }

    /**
     * {@inheritDoc}
     */
    public function getMissions(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMissions', []);

        return parent::getMissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addMission(\App\Entity\Mission $mission): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMission', [$mission]);

        return parent::addMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMission(\App\Entity\Mission $mission): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMission', [$mission]);

        return parent::removeMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function getNationnalite(): ?\App\Entity\Nationnalite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNationnalite', []);

        return parent::getNationnalite();
    }

    /**
     * {@inheritDoc}
     */
    public function setNationnalite(?\App\Entity\Nationnalite $Nationnalite): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNationnalite', [$Nationnalite]);

        return parent::setNationnalite($Nationnalite);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialites(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialites', []);

        return parent::getSpecialites();
    }

    /**
     * {@inheritDoc}
     */
    public function addSpecialite(\App\Entity\Specialite $specialite): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSpecialite', [$specialite]);

        return parent::addSpecialite($specialite);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSpecialite(\App\Entity\Specialite $specialite): \App\Entity\Agent
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSpecialite', [$specialite]);

        return parent::removeSpecialite($specialite);
    }

}
