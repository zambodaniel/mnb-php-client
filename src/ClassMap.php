<?php

namespace MnbClient;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'GetCurrenciesRequestBody' => '\\MnbClient\\\StructType\\GetCurrenciesRequestBody',
            'GetCurrenciesResponseBody' => '\\MnbClient\\StructType\\GetCurrenciesResponseBody',
            'GetCurrencyUnitsRequestBody' => '\\MnbClient\\StructType\\GetCurrencyUnitsRequestBody',
            'GetCurrencyUnitsResponseBody' => '\\MnbClient\\StructType\\GetCurrencyUnitsResponseBody',
            'GetCurrentExchangeRatesRequestBody' => '\\MnbClient\\StructType\\GetCurrentExchangeRatesRequestBody',
            'GetCurrentExchangeRatesResponseBody' => '\\MnbClient\\StructType\\GetCurrentExchangeRatesResponseBody',
            'GetDateIntervalRequestBody' => '\\MnbClient\\StructType\\GetDateIntervalRequestBody',
            'GetDateIntervalResponseBody' => '\\MnbClient\\StructType\\GetDateIntervalResponseBody',
            'GetExchangeRatesRequestBody' => '\\MnbClient\\StructType\\GetExchangeRatesRequestBody',
            'GetExchangeRatesResponseBody' => '\\MnbClient\\StructType\\GetExchangeRatesResponseBody',
            'GetInfoRequestBody' => '\\MnbClient\\StructType\\GetInfoRequestBody',
            'GetInfoResponseBody' => '\\MnbClient\\StructType\\GetInfoResponseBody',
        );
    }
}
