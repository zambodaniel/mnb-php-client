<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.09.03.
 * Time: 12:04
 */

namespace MnbClient\Response;


use Carbon\Carbon;
use MnbClient\ResponseType\Currency;
use MnbClient\StructType\GetInfoResponseBody;

/**
 * Class GetInfoResponse
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Response
 */
class GetInfoResponse
{

    /**
     * @var Currency[]
     */
    private $currencies;

    /**
     * @var Carbon
     */
    private $firstDate;

    /**
     * @var Carbon
     */
    private $lastDate;


    /**
     * GetInfoResponse constructor.
     * @param GetInfoResponseBody $body
     */
    public function __construct(GetInfoResponseBody $body)
    {
        $this->parseResults($body);
    }

    /**
     * @param GetInfoResponseBody $body
     */
    private function parseResults(GetInfoResponseBody $body) {
        $nodes = simplexml_load_string($body->getGetInfoResult());
        $this->firstDate = Carbon::parse($nodes->FirstDate);
        $this->lastDate = Carbon::parse($nodes->LastDate);
        foreach ($nodes->Currencies as $currency) {
            foreach ($currency->Curr as $item)
            $this->currencies[] = new Currency((string) $item);
        }
    }

    /**
     * @return \Traversable
     */
    public function getCurrencies() : \Traversable {
        foreach ($this->currencies as $currency) {
            yield $currency;
        }
    }

    /**
     * @return Carbon
     */
    public function getFirstDate() : Carbon {
        return clone $this->firstDate;
    }

    /**
     * @return Carbon
     */
    public function getLastDate() : Carbon {
        return clone $this->lastDate;
    }
}