<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 14:57
 */

namespace MnbClient\ResponseType;


use Carbon\Carbon;

/**
 * Class Day
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\ResponseType
 *
 * @property-read Carbon $date
 * @property-read \ArrayIterator $rates
 */
class Day
{

    /**
     * @var Carbon
     */
    private $date;

    /**
     * @var Rate[]
     */
    private $rates;

    /**
     * Day constructor.
     * @param string $date
     * @param Rate[] $rates
     */
    public function __construct(string $date, array $rates = [])
    {
        $this->date = Carbon::parse($date);
        $this->rates = $rates;
    }

    /**
     * @return Carbon
     */
    public function getDate(): Carbon
    {
        return clone $this->date;
    }

    /**
     * @return \Traversable
     */
    public function getRates() : \Traversable
    {
        foreach ($this->rates as $rate) {
            yield $rate;
        }
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->date->toDateString();
    }

    /**
     * @param $name
     * @return \Traversable|Carbon|null
     */
    public function __get($name)
    {
        switch ($name) {
            case 'rates':
                return $this->getRates();
                break;
            case 'date':
                return $this->getDate();
                break;
        }
        return null;
    }

}