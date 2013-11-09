<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class IrrdbPrefix extends \Entities\IrrdbPrefix implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setPrefix($prefix)
    {
        $this->__load();
        return parent::setPrefix($prefix);
    }

    public function getPrefix()
    {
        $this->__load();
        return parent::getPrefix();
    }

    public function setProtocol($protocol)
    {
        $this->__load();
        return parent::setProtocol($protocol);
    }

    public function getProtocol()
    {
        $this->__load();
        return parent::getProtocol();
    }

    public function setFirstSeen($firstSeen)
    {
        $this->__load();
        return parent::setFirstSeen($firstSeen);
    }

    public function getFirstSeen()
    {
        $this->__load();
        return parent::getFirstSeen();
    }

    public function setLastSeen($lastSeen)
    {
        $this->__load();
        return parent::setLastSeen($lastSeen);
    }

    public function getLastSeen()
    {
        $this->__load();
        return parent::getLastSeen();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCustomer(\Entities\Customer $customer)
    {
        $this->__load();
        return parent::setCustomer($customer);
    }

    public function getCustomer()
    {
        $this->__load();
        return parent::getCustomer();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'prefix', 'protocol', 'first_seen', 'last_seen', 'id', 'Customer');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}