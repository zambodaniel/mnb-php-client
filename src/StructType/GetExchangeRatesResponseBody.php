<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExchangeRatesResponseBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetExchangeRatesResponseBody
 * @subpackage Structs
 */
class GetExchangeRatesResponseBody extends AbstractStructBase
{
    /**
     * The GetExchangeRatesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetExchangeRatesResult;
    /**
     * Constructor method for GetExchangeRatesResponseBody
     * @uses GetExchangeRatesResponseBody::setGetExchangeRatesResult()
     * @param string $getExchangeRatesResult
     */
    public function __construct($getExchangeRatesResult = null)
    {
        $this
            ->setGetExchangeRatesResult($getExchangeRatesResult);
    }
    /**
     * Get GetExchangeRatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetExchangeRatesResult()
    {
        return isset($this->GetExchangeRatesResult) ? $this->GetExchangeRatesResult : null;
    }
    /**
     * Set GetExchangeRatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getExchangeRatesResult
     * @return \MnbClient\StructType\GetExchangeRatesResponseBody
     */
    public function setGetExchangeRatesResult($getExchangeRatesResult = null)
    {
        // validation for constraint: string
        if (!is_null($getExchangeRatesResult) && !is_string($getExchangeRatesResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getExchangeRatesResult)), __LINE__);
        }
        if (is_null($getExchangeRatesResult) || (is_array($getExchangeRatesResult) && empty($getExchangeRatesResult))) {
            unset($this->GetExchangeRatesResult);
        } else {
            $this->GetExchangeRatesResult = $getExchangeRatesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetExchangeRatesResponseBody
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
