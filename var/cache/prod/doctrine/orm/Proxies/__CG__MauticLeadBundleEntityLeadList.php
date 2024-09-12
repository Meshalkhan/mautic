<?php

namespace Proxies\__CG__\Mautic\LeadBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class LeadList extends \Mautic\LeadBundle\Entity\LeadList implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'name', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'publicName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'category', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'description', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'alias', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'filters', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'isGlobal', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'isPreferenceCenter', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'leads', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'lastBuiltDate', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'lastBuiltTime', 'changes', 'new', 'deletedId', 'pastChanges'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'id', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'name', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'publicName', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'category', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'description', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'alias', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'filters', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'isGlobal', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'isPreferenceCenter', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'leads', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'lastBuiltDate', '' . "\0" . 'Mautic\\LeadBundle\\Entity\\LeadList' . "\0" . 'lastBuiltTime', 'changes', 'new', 'deletedId', 'pastChanges'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (LeadList $proxy) {
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
     * {@inheritDoc}
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);

        parent::__clone();
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(?\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(?\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
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
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(\Mautic\CategoryBundle\Entity\Category $category = NULL): \Mautic\LeadBundle\Entity\LeadList
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\Mautic\CategoryBundle\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublicName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublicName', []);

        return parent::getPublicName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublicName($publicName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublicName', [$publicName]);

        return parent::setPublicName($publicName);
    }

    /**
     * {@inheritDoc}
     */
    public function setFilters(array $filters)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilters', [$filters]);

        return parent::setFilters($filters);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilters', []);

        return parent::getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilterTypeOf(string $type): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasFilterTypeOf', [$type]);

        return parent::hasFilterTypeOf($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setIsGlobal($isGlobal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsGlobal', [$isGlobal]);

        return parent::setIsGlobal($isGlobal);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsGlobal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsGlobal', []);

        return parent::getIsGlobal();
    }

    /**
     * {@inheritDoc}
     */
    public function isGlobal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isGlobal', []);

        return parent::isGlobal();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlias($alias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlias', [$alias]);

        return parent::setAlias($alias);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlias', []);

        return parent::getAlias();
    }

    /**
     * {@inheritDoc}
     */
    public function getLeads()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLeads', []);

        return parent::getLeads();
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPreferenceCenter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPreferenceCenter', []);

        return parent::getIsPreferenceCenter();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPreferenceCenter($isPreferenceCenter): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPreferenceCenter', [$isPreferenceCenter]);

        parent::setIsPreferenceCenter($isPreferenceCenter);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastBuiltDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastBuiltDate', []);

        return parent::getLastBuiltDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastBuiltDate(?\DateTime $lastBuiltDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastBuiltDate', [$lastBuiltDate]);

        parent::setLastBuiltDate($lastBuiltDate);
    }

    /**
     * {@inheritDoc}
     */
    public function setLastBuiltDateToCurrentDatetime(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastBuiltDateToCurrentDatetime', []);

        parent::setLastBuiltDateToCurrentDatetime();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeLastBuiltDate(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'initializeLastBuiltDate', []);

        parent::initializeLastBuiltDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastBuiltTime(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastBuiltTime', []);

        return parent::getLastBuiltTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastBuiltTime(?float $lastBuiltTime): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastBuiltTime', [$lastBuiltTime]);

        parent::setLastBuiltTime($lastBuiltTime);
    }

    /**
     * {@inheritDoc}
     */
    public function isPublished($checkPublishStatus = true, $checkCategoryStatus = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPublished', [$checkPublishStatus, $checkCategoryStatus]);

        return parent::isPublished($checkPublishStatus, $checkCategoryStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAdded($dateAdded)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAdded', [$dateAdded]);

        return parent::setDateAdded($dateAdded);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAdded', []);

        return parent::getDateAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateModified($dateModified)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateModified', [$dateModified]);

        return parent::setDateModified($dateModified);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateModified', []);

        return parent::getDateModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOut($checkedOut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOut', [$checkedOut]);

        return parent::setCheckedOut($checkedOut);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOut', []);

        return parent::getCheckedOut();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy($modifiedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', [$modifiedBy]);

        return parent::setModifiedBy($modifiedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutBy($checkedOutBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutBy', [$checkedOutBy]);

        return parent::setCheckedOutBy($checkedOutBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutBy', []);

        return parent::getCheckedOutBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishStatus', []);

        return parent::getPublishStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function isNew()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNew', []);

        return parent::isNew();
    }

    /**
     * {@inheritDoc}
     */
    public function setNew(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNew', []);

        parent::setNew();
    }

    /**
     * {@inheritDoc}
     */
    public function getCheckedOutByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCheckedOutByUser', []);

        return parent::getCheckedOutByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedByUser', []);

        return parent::getCreatedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedByUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedByUser', []);

        return parent::getModifiedByUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedByUser($createdByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedByUser', [$createdByUser]);

        return parent::setCreatedByUser($createdByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedByUser($modifiedByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedByUser', [$modifiedByUser]);

        return parent::setModifiedByUser($modifiedByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setCheckedOutByUser($checkedOutByUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCheckedOutByUser', [$checkedOutByUser]);

        return parent::setCheckedOutByUser($checkedOutByUser);
    }

    /**
     * {@inheritDoc}
     */
    public function __call($name, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$name, $arguments]);

        return parent::__call($name, $arguments);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges($includePast = false)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', [$includePast]);

        return parent::getChanges($includePast);
    }

    /**
     * {@inheritDoc}
     */
    public function resetChanges(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'resetChanges', []);

        parent::resetChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges(array $changes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', [$changes]);

        parent::setChanges($changes);
    }

}
