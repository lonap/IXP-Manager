<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class TrafficDaily extends \Entities\TrafficDaily implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setDay($day)
    {
        $this->__load();
        return parent::setDay($day);
    }

    public function getDay()
    {
        $this->__load();
        return parent::getDay();
    }

    public function setCategory($category)
    {
        $this->__load();
        return parent::setCategory($category);
    }

    public function getCategory()
    {
        $this->__load();
        return parent::getCategory();
    }

    public function setDayAvgIn($dayAvgIn)
    {
        $this->__load();
        return parent::setDayAvgIn($dayAvgIn);
    }

    public function getDayAvgIn()
    {
        $this->__load();
        return parent::getDayAvgIn();
    }

    public function setDayAvgOut($dayAvgOut)
    {
        $this->__load();
        return parent::setDayAvgOut($dayAvgOut);
    }

    public function getDayAvgOut()
    {
        $this->__load();
        return parent::getDayAvgOut();
    }

    public function setDayMaxIn($dayMaxIn)
    {
        $this->__load();
        return parent::setDayMaxIn($dayMaxIn);
    }

    public function getDayMaxIn()
    {
        $this->__load();
        return parent::getDayMaxIn();
    }

    public function setDayMaxOut($dayMaxOut)
    {
        $this->__load();
        return parent::setDayMaxOut($dayMaxOut);
    }

    public function getDayMaxOut()
    {
        $this->__load();
        return parent::getDayMaxOut();
    }

    public function setDayTotIn($dayTotIn)
    {
        $this->__load();
        return parent::setDayTotIn($dayTotIn);
    }

    public function getDayTotIn()
    {
        $this->__load();
        return parent::getDayTotIn();
    }

    public function setDayTotOut($dayTotOut)
    {
        $this->__load();
        return parent::setDayTotOut($dayTotOut);
    }

    public function getDayTotOut()
    {
        $this->__load();
        return parent::getDayTotOut();
    }

    public function setWeekAvgIn($weekAvgIn)
    {
        $this->__load();
        return parent::setWeekAvgIn($weekAvgIn);
    }

    public function getWeekAvgIn()
    {
        $this->__load();
        return parent::getWeekAvgIn();
    }

    public function setWeekAvgOut($weekAvgOut)
    {
        $this->__load();
        return parent::setWeekAvgOut($weekAvgOut);
    }

    public function getWeekAvgOut()
    {
        $this->__load();
        return parent::getWeekAvgOut();
    }

    public function setWeekMaxIn($weekMaxIn)
    {
        $this->__load();
        return parent::setWeekMaxIn($weekMaxIn);
    }

    public function getWeekMaxIn()
    {
        $this->__load();
        return parent::getWeekMaxIn();
    }

    public function setWeekMaxOut($weekMaxOut)
    {
        $this->__load();
        return parent::setWeekMaxOut($weekMaxOut);
    }

    public function getWeekMaxOut()
    {
        $this->__load();
        return parent::getWeekMaxOut();
    }

    public function setWeekTotIn($weekTotIn)
    {
        $this->__load();
        return parent::setWeekTotIn($weekTotIn);
    }

    public function getWeekTotIn()
    {
        $this->__load();
        return parent::getWeekTotIn();
    }

    public function setWeekTotOut($weekTotOut)
    {
        $this->__load();
        return parent::setWeekTotOut($weekTotOut);
    }

    public function getWeekTotOut()
    {
        $this->__load();
        return parent::getWeekTotOut();
    }

    public function setMonthAvgIn($monthAvgIn)
    {
        $this->__load();
        return parent::setMonthAvgIn($monthAvgIn);
    }

    public function getMonthAvgIn()
    {
        $this->__load();
        return parent::getMonthAvgIn();
    }

    public function setMonthAvgOut($monthAvgOut)
    {
        $this->__load();
        return parent::setMonthAvgOut($monthAvgOut);
    }

    public function getMonthAvgOut()
    {
        $this->__load();
        return parent::getMonthAvgOut();
    }

    public function setMonthMaxIn($monthMaxIn)
    {
        $this->__load();
        return parent::setMonthMaxIn($monthMaxIn);
    }

    public function getMonthMaxIn()
    {
        $this->__load();
        return parent::getMonthMaxIn();
    }

    public function setMonthMaxOut($monthMaxOut)
    {
        $this->__load();
        return parent::setMonthMaxOut($monthMaxOut);
    }

    public function getMonthMaxOut()
    {
        $this->__load();
        return parent::getMonthMaxOut();
    }

    public function setMonthTotIn($monthTotIn)
    {
        $this->__load();
        return parent::setMonthTotIn($monthTotIn);
    }

    public function getMonthTotIn()
    {
        $this->__load();
        return parent::getMonthTotIn();
    }

    public function setMonthTotOut($monthTotOut)
    {
        $this->__load();
        return parent::setMonthTotOut($monthTotOut);
    }

    public function getMonthTotOut()
    {
        $this->__load();
        return parent::getMonthTotOut();
    }

    public function setYearAvgIn($yearAvgIn)
    {
        $this->__load();
        return parent::setYearAvgIn($yearAvgIn);
    }

    public function getYearAvgIn()
    {
        $this->__load();
        return parent::getYearAvgIn();
    }

    public function setYearAvgOut($yearAvgOut)
    {
        $this->__load();
        return parent::setYearAvgOut($yearAvgOut);
    }

    public function getYearAvgOut()
    {
        $this->__load();
        return parent::getYearAvgOut();
    }

    public function setYearMaxIn($yearMaxIn)
    {
        $this->__load();
        return parent::setYearMaxIn($yearMaxIn);
    }

    public function getYearMaxIn()
    {
        $this->__load();
        return parent::getYearMaxIn();
    }

    public function setYearMaxOut($yearMaxOut)
    {
        $this->__load();
        return parent::setYearMaxOut($yearMaxOut);
    }

    public function getYearMaxOut()
    {
        $this->__load();
        return parent::getYearMaxOut();
    }

    public function setYearTotIn($yearTotIn)
    {
        $this->__load();
        return parent::setYearTotIn($yearTotIn);
    }

    public function getYearTotIn()
    {
        $this->__load();
        return parent::getYearTotIn();
    }

    public function setYearTotOut($yearTotOut)
    {
        $this->__load();
        return parent::setYearTotOut($yearTotOut);
    }

    public function getYearTotOut()
    {
        $this->__load();
        return parent::getYearTotOut();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCustomer(\Entities\Customer $customer = NULL)
    {
        $this->__load();
        return parent::setCustomer($customer);
    }

    public function getCustomer()
    {
        $this->__load();
        return parent::getCustomer();
    }

    public function setIXP(\Entities\IXP $iXP = NULL)
    {
        $this->__load();
        return parent::setIXP($iXP);
    }

    public function getIXP()
    {
        $this->__load();
        return parent::getIXP();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'day', 'category', 'day_avg_in', 'day_avg_out', 'day_max_in', 'day_max_out', 'day_tot_in', 'day_tot_out', 'week_avg_in', 'week_avg_out', 'week_max_in', 'week_max_out', 'week_tot_in', 'week_tot_out', 'month_avg_in', 'month_avg_out', 'month_max_in', 'month_max_out', 'month_tot_in', 'month_tot_out', 'year_avg_in', 'year_avg_out', 'year_max_in', 'year_max_out', 'year_tot_in', 'year_tot_out', 'id', 'Customer', 'IXP');
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