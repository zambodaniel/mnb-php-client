<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCurrenciesResponseBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCurrenciesResponseBody
 * @subpackage Structs
 */
class GetCurrenciesResponseBody extends AbstractStructBase
{
    /**
     * The GetCurrenciesResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetCurrenciesResult;
    /**
     * Constructor method for GetCurrenciesResponseBody
     * @uses GetCurrenciesResponseBody::setGetCurrenciesResult()
     * @param string $getCurrenciesResult
     */
    public function __construct($getCurrenciesResult = null)
    {
        $this
            ->setGetCurrenciesResult($getCurrenciesResult);
    }
    /**
     * Get GetCurrenciesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetCurrenciesResult()
    {
        return isset($this->GetCurrenciesResult) ? $this->GetCurrenciesResult : null;
    }
    /**
     * Set GetCurrenciesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getCurrenciesResult
     * @return \MnbClient\StructType\GetCurrenciesResponseBody
     */
    public function setGetCurrenciesResult($getCurrenciesResult = null)
    {
        // validation for constraint: string
        if (!is_null($getCurrenciesResult) && !is_string($getCurrenciesResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getCurrenciesResult)), __LINE__);
        }
        if (is_null($getCurrenciesResult) || (is_array($getCurrenciesResult) && empty($getCurrenciesResult))) {
            unset($this->GetCurrenciesResult);
        } else {
            $this->GetCurrenciesResult = $getCurrenciesResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetCurrenciesResponseBody
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
