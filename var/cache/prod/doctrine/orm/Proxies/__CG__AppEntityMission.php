<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mission extends \App\Entity\Mission implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'nomCode', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Agent', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Statut', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Planque', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'dateDebut', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'dateFin', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Cible', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Specialite'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'titre', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'nomCode', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Agent', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'contact', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Statut', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Planque', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'dateDebut', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'dateFin', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Cible', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'pays', '' . "\0" . 'App\\Entity\\Mission' . "\0" . 'Specialite'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Mission $proxy) {
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
    public function validationPlanquePays(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validationPlanquePays', [$context]);

        return parent::validationPlanquePays($context);
    }

    /**
     * {@inheritDoc}
     */
    public function validationSpecialite(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validationSpecialite', [$context]);

        return parent::validationSpecialite($context);
    }

    /**
     * {@inheritDoc}
     */
    public function validationNationnnaliteAgentCible(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validationNationnnaliteAgentCible', [$context]);

        return parent::validationNationnnaliteAgentCible($context);
    }

    /**
     * {@inheritDoc}
     */
    public function validationContactPaysMission(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validationContactPaysMission', [$context]);

        return parent::validationContactPaysMission($context);
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
    public function getTitre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre(string $titre): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomCode(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomCode', []);

        return parent::getNomCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomCode(string $nomCode): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomCode', [$nomCode]);

        return parent::setNomCode($nomCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgent(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgent', []);

        return parent::getAgent();
    }

    /**
     * {@inheritDoc}
     */
    public function addAgent(\App\Entity\Agent $agent): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAgent', [$agent]);

        return parent::addAgent($agent);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAgent(\App\Entity\Agent $agent): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAgent', [$agent]);

        return parent::removeAgent($agent);
    }

    /**
     * {@inheritDoc}
     */
    public function getContact(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContact', []);

        return parent::getContact();
    }

    /**
     * {@inheritDoc}
     */
    public function addContact(\App\Entity\Contact $contact): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addContact', [$contact]);

        return parent::addContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function removeContact(\App\Entity\Contact $contact): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeContact', [$contact]);

        return parent::removeContact($contact);
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut(string $Statut): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$Statut]);

        return parent::setStatut($Statut);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanque(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanque', []);

        return parent::getPlanque();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlanque(\App\Entity\Planque $planque): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlanque', [$planque]);

        return parent::addPlanque($planque);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlanque(\App\Entity\Planque $planque): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlanque', [$planque]);

        return parent::removePlanque($planque);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut(\DateTimeInterface $dateDebut): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$dateDebut]);

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin(\DateTimeInterface $dateFin): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$dateFin]);

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getCible(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCible', []);

        return parent::getCible();
    }

    /**
     * {@inheritDoc}
     */
    public function addCible(\App\Entity\Cible $cible): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCible', [$cible]);

        return parent::addCible($cible);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCible(\App\Entity\Cible $cible): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCible', [$cible]);

        return parent::removeCible($cible);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays(): ?\App\Entity\Pays
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', []);

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays(?\App\Entity\Pays $pays): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', [$pays]);

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpecialite(): ?\App\Entity\Specialite
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpecialite', []);

        return parent::getSpecialite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpecialite(?\App\Entity\Specialite $Specialite): \App\Entity\Mission
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpecialite', [$Specialite]);

        return parent::setSpecialite($Specialite);
    }

}