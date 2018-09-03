<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrencyUnitsResponseBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCurrencyUnitsResponseBody
 * @subpackage Structs
 */
class GetCurrencyUnitsResponseBody extends AbstractStructBase
{
    /**
     * The GetCurrencyUnitsResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetCurrencyUnitsResult;
    /**
     * Constructor method for GetCurrencyUnitsResponseBody
     * @uses GetCurrencyUnitsResponseBody::setGetCurrencyUnitsResult()
     * @param string $getCurrencyUnitsResult
     */
    public function __construct($getCurrencyUnitsResult = null)
    {
        $this
            ->setGetCurrencyUnitsResult($getCurrencyUnitsResult);
    }
    /**
     * Get GetCurrencyUnitsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetCurrencyUnitsResult()
    {
        return isset($this->GetCurrencyUnitsResult) ? $this->GetCurrencyUnitsResult : null;
    }
    /**
     * Set GetCurrencyUnitsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getCurrencyUnitsResult
     * @return \MnbClient\StructType\GetCurrencyUnitsResponseBody
     */
    public function setGetCurrencyUnitsResult($getCurrencyUnitsResult = null)
    {
        // validation for constraint: string
        if (!is_null($getCurrencyUnitsResult) && !is_string($getCurrencyUnitsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getCurrencyUnitsResult)), __LINE__);
        }
        if (is_null($getCurrencyUnitsResult) || (is_array($getCurrencyUnitsResult) && empty($getCurrencyUnitsResult))) {
            unset($this->GetCurrencyUnitsResult);
        } else {
            $this->GetCurrencyUnitsResult = $getCurrencyUnitsResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetCurrencyUnitsResponseBody
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
