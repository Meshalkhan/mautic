<?php

namespace Proxies\__CG__\Mautic\DynamicContentBundle\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Stat extends \Mautic\DynamicContentBundle\Entity\Stat implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'dynamicContent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sentCount', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'lastSent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sentDetails', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'tokens'];
        }

        return ['__isInitialized__', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'id', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'dynamicContent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'lead', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'dateSent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sentCount', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'lastSent', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sentDetails', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'source', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'sourceId', '' . "\0" . 'Mautic\\DynamicContentBundle\\Entity\\Stat' . "\0" . 'tokens'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Stat $proxy) {
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
    public function addSentDetails($details): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSentDetails', [$details]);

        parent::addSentDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function upSentCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upSentCount', []);

        return parent::upSentCount();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getDynamicContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDynamicContent', []);

        return parent::getDynamicContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDynamicContent(\Mautic\DynamicContentBundle\Entity\DynamicContent $dynamicContent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDynamicContent', [$dynamicContent]);

        parent::setDynamicContent($dynamicContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getLead()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLead', []);

        return parent::getLead();
    }

    /**
     * {@inheritDoc}
     */
    public function setLead($lead): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLead', [$lead]);

        parent::setLead($lead);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateSent', []);

        return parent::getDateSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateSent($dateSent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateSent', [$dateSent]);

        parent::setDateSent($dateSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentCount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentCount', []);

        return parent::getSentCount();
    }

    /**
     * {@inheritDoc}
     */
    public function setSentCount($sentCount): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentCount', [$sentCount]);

        parent::setSentCount($sentCount);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastSent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastSent', []);

        return parent::getLastSent();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastSent($lastSent): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastSent', [$lastSent]);

        parent::setLastSent($lastSent);
    }

    /**
     * {@inheritDoc}
     */
    public function getSentDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSentDetails', []);

        return parent::getSentDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setSentDetails($sentDetails): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSentDetails', [$sentDetails]);

        parent::setSentDetails($sentDetails);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', []);

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', [$source]);

        parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceId', []);

        return parent::getSourceId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceId($sourceId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceId', [$sourceId]);

        parent::setSourceId($sourceId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTokens()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTokens', []);

        return parent::getTokens();
    }

    /**
     * {@inheritDoc}
     */
    public function setTokens($tokens): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTokens', [$tokens]);

        parent::setTokens($tokens);
    }

}
