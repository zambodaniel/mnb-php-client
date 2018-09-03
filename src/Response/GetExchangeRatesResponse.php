<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 15:30
 */

namespace MnbClient\Response;


use MnbClient\ResponseType\Currency;
use MnbClient\ResponseType\Day;
use MnbClient\ResponseType\Rate;
use MnbClient\StructType\GetExchangeRatesResponseBody;

/**
 * Class GetExchangeRatesResponse
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Response
 */
class GetExchangeRatesResponse implements \IteratorAggregate
{

    /**
     * @var Day[]
     */
    private $days;


    /**
     * GetExchangeRatesResponse constructor.
     * @param GetExchangeRatesResponseBody $body
     */
    public function __construct(GetExchangeRatesResponseBody $body)
    {
        $this->parseResponse($body);
    }

    /**
     * @param GetExchangeRatesResponseBody $body
     */
    private function parseResponse(GetExchangeRatesResponseBody $body) {
        foreach ((simplexml_load_string($body->getGetExchangeRatesResult()))->children() as $day) {
            $rates = [];
            foreach ($day->children() as $rate) {
                $rates[] = new Rate((int) $rate['unit'], new Currency((string) $rate['curr'], (float) $rate['unit']), str_replace(',', '.', (string) $rate));
            }
            $this->days[] = (new Day($day['date'], $rates));
        }
    }

    /**
     * @return \Generator|\Traversable
     */
    public function getIterator() : \Traversable
    {
        foreach ($this->days as $day) {
            yield $day;
        }
    }

    /**
     * @return Day[]
     */
    public function getDays(): array
    {
        return $this->days;
    }


}