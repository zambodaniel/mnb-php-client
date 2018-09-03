<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 13:04
 */

namespace MnbClient;

use Carbon\Carbon;
use MnbClient\Exceptions\ClientException;
use MnbClient\Exceptions\MnbException;
use MnbClient\Response\GetCurrenciesResponse;
use MnbClient\Response\GetCurrencyUnitsResponse;
use MnbClient\Response\GetExchangeRatesResponse;
use MnbClient\Response\GetInfoResponse;
use MnbClient\ResponseType\Currency;
use MnbClient\ResponseType\DateInterval;
use MnbClient\StructType\GetExchangeRatesResponseBody;
use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * Class Client
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Client
 */
class Client extends AbstractSoapClientBase
{

    /**
     * Client constructor.
     * @param array $wsdlOptions
     */
    public function __construct(array $wsdlOptions = [])
    {
        $wsdlOptions = array_merge($wsdlOptions, [
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.mnb.hu/arfolyamok.asmx?singleWsdl',
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \MnbClient\ClassMap::get(),
        ]);
        parent::__construct($wsdlOptions);
    }

    /**
     * Method to call the operation originally named GetCurrencies
     * @return GetCurrenciesResponse
     * @throws ClientException
     * @throws MnbException
     */
    public function GetCurrencies() : GetCurrenciesResponse
    {
        try {
            $res = $this->getSoapClient()->GetCurrencies((new \MnbClient\StructType\GetCurrenciesRequestBody));
            return new GetCurrenciesResponse($res);
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
    /**
     * Method to call the operation originally named GetCurrencyUnits
     * @return GetCurrencyUnitsResponse
     * @param Currency[]|string
     * @throws MnbException
     * @throws ClientException
     */
    public function GetCurrencyUnits($currencies) : GetCurrencyUnitsResponse
    {
        if (!is_array($currencies)) {
            $currencies = [new Currency($currencies)];
        }
        try {
            $res = $this->getSoapClient()->GetCurrencyUnits((new \MnbClient\StructType\GetCurrencyUnitsRequestBody(implode(',', $currencies))));
            return new GetCurrencyUnitsResponse($res);
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
    /**
     * Method to call the operation originally named GetCurrentExchangeRates
     * @return GetExchangeRatesResponse
     * @throws MnbException
     * @throws ClientException
     */
    public function GetCurrentExchangeRates() : GetExchangeRatesResponse
    {
        try {
            $res = $this->getSoapClient()->GetCurrentExchangeRates((new \MnbClient\StructType\GetCurrentExchangeRatesRequestBody));
            return new GetExchangeRatesResponse(new GetExchangeRatesResponseBody($res->getGetCurrentExchangeRatesResult()));
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
    /**
     * Method to call the operation originally named GetDateInterval
     * @return DateInterval
     * @throws MnbException
     * @throws ClientException
     */
    public function GetDateInterval() : DateInterval
    {
        try {
            $res = $this->getSoapClient()->GetDateInterval((new \MnbClient\StructType\GetDateIntervalRequestBody));
            $nodes = simplexml_load_string($res->getGetDateIntervalResult());
            return new DateInterval($nodes->DateInterval['startdate'], $nodes->DateInterval['enddate']);
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
    /**
     * Method to call the operation originally named GetExchangeRates
     * @param Carbon|null $startDate
     * @param Carbon|null $endDate
     * @param Currency[]|string $currencies
     * @return GetExchangeRatesResponse
     * @throws ClientException
     * @throws MnbException
     */
    public function GetExchangeRates(Carbon $startDate = null, Carbon $endDate = null, $currencies = []) : GetExchangeRatesResponse
    {
        if (!is_array($currencies)) {
            $currencies = [$currencies];
        }
        $getExchangeRates = new \MnbClient\StructType\GetExchangeRatesRequestBody(
            $startDate ? $startDate->toDateString() : null,
            $endDate ? $endDate->toDateString() : null,
            implode(',', $currencies));
        try {
            return new GetExchangeRatesResponse($this->getSoapClient()->GetExchangeRates($getExchangeRates));
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
    /**
     * Method to call the operation originally named GetInfo
     * @return GetInfoResponse
     */
    public function GetInfo() : GetInfoResponse
    {
        try {
            $res = $this->getSoapClient()->GetInfo((new \MnbClient\StructType\GetInfoRequestBody));
            return new GetInfoResponse($res);
        } catch (\SoapFault $soapFault) {
            throw new MnbException($soapFault);
        } catch (\Throwable $exception) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}