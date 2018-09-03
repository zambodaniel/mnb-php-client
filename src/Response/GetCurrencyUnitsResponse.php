<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.09.03.
 * Time: 11:08
 */

namespace MnbClient\Response;


use MnbClient\ResponseType\Currency;
use MnbClient\StructType\GetCurrencyUnitsResponseBody;

/**
 * Class GetCurrencyUnitsResponse
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Response
 */
class GetCurrencyUnitsResponse implements \IteratorAggregate
{

    /**
     * @var array
     */
    private $currencies;

    /**
     * GetCurrencyUnitsResponse constructor.
     * @param GetCurrencyUnitsResponseBody $body
     */
    public function __construct(GetCurrencyUnitsResponseBody $body)
    {
        $this->parseResult($body);
    }

    /**
     * @param GetCurrencyUnitsResponseBody $body
     */
    private function parseResult(GetCurrencyUnitsResponseBody $body) {
        foreach ((simplexml_load_string($body->getGetCurrencyUnitsResult()))->children() as $currencies) {
            foreach ($currencies as $currency) {
                $this->currencies[] = new Currency($currency['curr'], (float) $currency);
            }
        }
    }

    /**
     * @return \Traversable
     */
    public function getIterator() :\Traversable
    {
        foreach ($this->currencies as $currency) {
            yield $currency;
        }
    }

    /**
     * @return Currency[]
     */
    public function getCurrencies() : array {
        return $this->currencies;
    }

}