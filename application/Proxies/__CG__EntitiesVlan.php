<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Vlan extends \Entities\Vlan implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setNumber($number)
    {
        $this->__load();
        return parent::setNumber($number);
    }

    public function getNumber()
    {
        $this->__load();
        return parent::getNumber();
    }

    public function setRcvrfname($rcvrfname)
    {
        $this->__load();
        return parent::setRcvrfname($rcvrfname);
    }

    public function getRcvrfname()
    {
        $this->__load();
        return parent::getRcvrfname();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {
        $this->__load();
        return parent::addVlanInterface($vlanInterfaces);
    }

    public function removeVlanInterface(\Entities\VlanInterface $vlanInterfaces)
    {
        $this->__load();
        return parent::removeVlanInterface($vlanInterfaces);
    }

    public function getVlanInterfaces()
    {
        $this->__load();
        return parent::getVlanInterfaces();
    }

    public function addIPv4Addresses(\Entities\IPv4Address $iPv4Addresses)
    {
        $this->__load();
        return parent::addIPv4Addresses($iPv4Addresses);
    }

    public function removeIPv4Addresses(\Entities\IPv4Address $iPv4Addresses)
    {
        $this->__load();
        return parent::removeIPv4Addresses($iPv4Addresses);
    }

    public function getIPv4Addresses()
    {
        $this->__load();
        return parent::getIPv4Addresses();
    }

    public function addIPv6Addresses(\Entities\IPv6Address $iPv6Addresses)
    {
        $this->__load();
        return parent::addIPv6Addresses($iPv6Addresses);
    }

    public function removeIPv6Addresses(\Entities\IPv6Address $iPv6Addresses)
    {
        $this->__load();
        return parent::removeIPv6Addresses($iPv6Addresses);
    }

    public function getIPv6Addresses()
    {
        $this->__load();
        return parent::getIPv6Addresses();
    }

    public function addNetworkInfo(\Entities\NetworkInfo $networkInfo)
    {
        $this->__load();
        return parent::addNetworkInfo($networkInfo);
    }

    public function removeNetworkInfo(\Entities\NetworkInfo $networkInfo)
    {
        $this->__load();
        return parent::removeNetworkInfo($networkInfo);
    }

    public function getNetworkInfo()
    {
        $this->__load();
        return parent::getNetworkInfo();
    }

    public function setPrivate($private)
    {
        $this->__load();
        return parent::setPrivate($private);
    }

    public function getPrivate()
    {
        $this->__load();
        return parent::getPrivate();
    }

    public function addNetInfo(\Entities\NetInfo $netInfo)
    {
        $this->__load();
        return parent::addNetInfo($netInfo);
    }

    public function removeNetInfo(\Entities\NetInfo $netInfo)
    {
        $this->__load();
        return parent::removeNetInfo($netInfo);
    }

    public function getNetInfos()
    {
        $this->__load();
        return parent::getNetInfos();
    }

    public function getSubnetSize($protocol)
    {
        $this->__load();
        return parent::getSubnetSize($protocol);
    }

    public function getRouteServers($protocol)
    {
        $this->__load();
        return parent::getRouteServers($protocol);
    }

    public function getDnsFile($protocol)
    {
        $this->__load();
        return parent::getDnsFile($protocol);
    }

    public function getAS112Servers($protocol)
    {
        $this->__load();
        return parent::getAS112Servers($protocol);
    }

    public function getRouteCollectors($protocol)
    {
        $this->__load();
        return parent::getRouteCollectors($protocol);
    }

    public function getPingBeacons($protocol)
    {
        $this->__load();
        return parent::getPingBeacons($protocol);
    }

    public function loadNetInfo($property, $protocol, $index = 0)
    {
        $this->__load();
        return parent::loadNetInfo($property, $protocol, $index);
    }

    public function deleteNetInfo($property, $protocol, $index = NULL)
    {
        $this->__load();
        return parent::deleteNetInfo($property, $protocol, $index);
    }

    public function hasNetInfo($property, $protocol, $index = 0)
    {
        $this->__load();
        return parent::hasNetInfo($property, $protocol, $index);
    }

    public function getNetInfo($property, $protocol, $index = 0)
    {
        $this->__load();
        return parent::getNetInfo($property, $protocol, $index);
    }

    public function getIndexedNetInfo($property, $protocol, $withIndex = false)
    {
        $this->__load();
        return parent::getIndexedNetInfo($property, $protocol, $withIndex);
    }

    public function setNetInfo($property, $value, $protocol, $index = 0)
    {
        $this->__load();
        return parent::setNetInfo($property, $value, $protocol, $index);
    }

    public function addIndexedNetInfo($property, $value, $protocol)
    {
        $this->__load();
        return parent::addIndexedNetInfo($property, $value, $protocol);
    }

    public function getAssocNetInfo($property, $protocol, $index = NULL)
    {
        $this->__load();
        return parent::getAssocNetInfo($property, $protocol, $index);
    }

    public function deleteAssocNetInfo($property, $protocol, $index = NULL)
    {
        $this->__load();
        return parent::deleteAssocNetInfo($property, $protocol, $index);
    }

    public function setInfrastructure(\Entities\Infrastructure $infrastructure = NULL)
    {
        $this->__load();
        return parent::setInfrastructure($infrastructure);
    }

    public function getInfrastructure()
    {
        $this->__load();
        return parent::getInfrastructure();
    }

    public function addIPv4Addresse(\Entities\IPv4Address $iPv4Addresses)
    {
        $this->__load();
        return parent::addIPv4Addresse($iPv4Addresses);
    }

    public function removeIPv4Addresse(\Entities\IPv4Address $iPv4Addresses)
    {
        $this->__load();
        return parent::removeIPv4Addresse($iPv4Addresses);
    }

    public function addIPv6Addresse(\Entities\IPv6Address $iPv6Addresses)
    {
        $this->__load();
        return parent::addIPv6Addresse($iPv6Addresses);
    }

    public function removeIPv6Addresse(\Entities\IPv6Address $iPv6Addresses)
    {
        $this->__load();
        return parent::removeIPv6Addresse($iPv6Addresses);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'number', 'rcvrfname', 'private', 'notes', 'id', 'NetInfo', 'VlanInterfaces', 'IPv4Addresses', 'IPv6Addresses', 'NetworkInfo', 'Infrastructure');
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