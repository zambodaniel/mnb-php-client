<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.09.03.
 * Time: 10:46
 */

namespace MnbClient\Response;


use MnbClient\ResponseType\Currency;
use MnbClient\StructType\GetCurrenciesResponseBody;

/**
 * Class GetCurrenciesResponse
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Response
 */
class GetCurrenciesResponse implements \IteratorAggregate
{

    /**
     * @var Currency[]
     */
    private $currencies;

    /**
     * GetCurrenciesResponse constructor.
     * @param GetCurrenciesResponseBody $body
     */
    public function __construct(GetCurrenciesResponseBody $body)
    {
        $this->parseResult($body);
    }

    /**
     * @param GetCurrenciesResponseBody $body
     */
    private function parseResult(GetCurrenciesResponseBody $body) {
        foreach ((simplexml_load_string($body->getGetCurrenciesResult()))->children() as $currency) {
            foreach ($currency->Curr as $item) {
                $this->currencies[] = new Currency($item);
            }
        }
    }

    /**
     * @return \Traversable
     */
    public function getIterator() : \Traversable
    {
        foreach ($this->currencies as $currency) {
            yield $currency;
        }
    }

}