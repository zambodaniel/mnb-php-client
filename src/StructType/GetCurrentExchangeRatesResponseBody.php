<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentExchangeRatesResponseBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCurrentExchangeRatesResponseBody
 * @subpackage Structs
 */
class GetCurrentExchangeRatesResponseBody extends AbstractStructBase
{
    /**
     * The GetCurrentExchangeRatesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetCurrentExchangeRatesResult;
    /**
     * Constructor method for GetCurrentExchangeRatesResponseBody
     * @uses GetCurrentExchangeRatesResponseBody::setGetCurrentExchangeRatesResult()
     * @param string $getCurrentExchangeRatesResult
     */
    public function __construct($getCurrentExchangeRatesResult = null)
    {
        $this
            ->setGetCurrentExchangeRatesResult($getCurrentExchangeRatesResult);
    }
    /**
     * Get GetCurrentExchangeRatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetCurrentExchangeRatesResult()
    {
        return isset($this->GetCurrentExchangeRatesResult) ? $this->GetCurrentExchangeRatesResult : null;
    }
    /**
     * Set GetCurrentExchangeRatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getCurrentExchangeRatesResult
     * @return \MnbClient\StructType\GetCurrentExchangeRatesResponseBody
     */
    public function setGetCurrentExchangeRatesResult($getCurrentExchangeRatesResult = null)
    {
        // validation for constraint: string
        if (!is_null($getCurrentExchangeRatesResult) && !is_string($getCurrentExchangeRatesResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getCurrentExchangeRatesResult)), __LINE__);
        }
        if (is_null($getCurrentExchangeRatesResult) || (is_array($getCurrentExchangeRatesResult) && empty($getCurrentExchangeRatesResult))) {
            unset($this->GetCurrentExchangeRatesResult);
        } else {
            $this->GetCurrentExchangeRatesResult = $getCurrentExchangeRatesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetCurrentExchangeRatesResponseBody
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
