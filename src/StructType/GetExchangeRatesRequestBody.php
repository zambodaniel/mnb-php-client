<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExchangeRatesRequestBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetExchangeRatesRequestBody
 * @subpackage Structs
 */
class GetExchangeRatesRequestBody extends AbstractStructBase
{
    /**
     * The startDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $startDate;
    /**
     * The endDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $endDate;
    /**
     * The currencyNames
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $currencyNames;
    /**
     * Constructor method for GetExchangeRatesRequestBody
     * @uses GetExchangeRatesRequestBody::setStartDate()
     * @uses GetExchangeRatesRequestBody::setEndDate()
     * @uses GetExchangeRatesRequestBody::setCurrencyNames()
     * @param string $startDate
     * @param string $endDate
     * @param string $currencyNames
     */
    public function __construct(string $startDate = null, string $endDate = null, string $currencyNames = null)
    {
        $this
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setCurrencyNames($currencyNames);
    }
    /**
     * Get startDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDate()
    {
        return isset($this->startDate) ? $this->startDate : null;
    }
    /**
     * Set startDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDate
     * @return \MnbClient\StructType\GetExchangeRatesRequestBody
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        if (is_null($startDate) || (is_array($startDate) && empty($startDate))) {
            unset($this->startDate);
        } else {
            $this->startDate = $startDate;
        }
        return $this;
    }
    /**
     * Get endDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->endDate) ? $this->endDate : null;
    }
    /**
     * Set endDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \MnbClient\StructType\GetExchangeRatesRequestBody
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->endDate);
        } else {
            $this->endDate = $endDate;
        }
        return $this;
    }
    /**
     * Get currencyNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCurrencyNames()
    {
        return isset($this->currencyNames) ? $this->currencyNames : null;
    }
    /**
     * Set currencyNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $currencyNames
     * @return \MnbClient\StructType\GetExchangeRatesRequestBody
     */
    public function setCurrencyNames($currencyNames = null)
    {
        // validation for constraint: string
        if (!is_null($currencyNames) && !is_string($currencyNames)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyNames)), __LINE__);
        }
        if (is_null($currencyNames) || (is_array($currencyNames) && empty($currencyNames))) {
            unset($this->currencyNames);
        } else {
            $this->currencyNames = $currencyNames;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetExchangeRatesRequestBody
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
