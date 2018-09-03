<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrentExchangeRatesRequestBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCurrentExchangeRatesRequestBody
 * @subpackage Structs
 */
class GetCurrentExchangeRatesRequestBody extends AbstractStructBase
{
    /**
     * Constructor method for GetCurrentExchangeRatesRequestBody
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetCurrentExchangeRatesRequestBody
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
