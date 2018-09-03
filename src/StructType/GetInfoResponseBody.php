<?php

namespace MnbClient\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInfoResponseBody StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInfoResponseBody
 * @subpackage Structs
 */
class GetInfoResponseBody extends AbstractStructBase
{
    /**
     * The GetInfoResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GetInfoResult;
    /**
     * Constructor method for GetInfoResponseBody
     * @uses GetInfoResponseBody::setGetInfoResult()
     * @param string $getInfoResult
     */
    public function __construct($getInfoResult = null)
    {
        $this
            ->setGetInfoResult($getInfoResult);
    }
    /**
     * Get GetInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGetInfoResult()
    {
        return isset($this->GetInfoResult) ? $this->GetInfoResult : null;
    }
    /**
     * Set GetInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $getInfoResult
     * @return \MnbClient\StructType\GetInfoResponseBody
     */
    public function setGetInfoResult($getInfoResult = null)
    {
        // validation for constraint: string
        if (!is_null($getInfoResult) && !is_string($getInfoResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($getInfoResult)), __LINE__);
        }
        if (is_null($getInfoResult) || (is_array($getInfoResult) && empty($getInfoResult))) {
            unset($this->GetInfoResult);
        } else {
            $this->GetInfoResult = $getInfoResult;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \MnbClient\StructType\GetInfoResponseBody
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
