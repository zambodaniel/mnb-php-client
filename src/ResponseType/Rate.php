<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 14:57
 */

namespace MnbClient\ResponseType;


/**
 * Class Rate
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\ResponseType
 *
 * @property-read float $unit
 * @property-read string $currency
 * @property-read float $value
 */
class Rate
{

    /**
     * @var array
     */
    private $properties = [
        'unit',
        'currency',
        'value'
    ];

    /**
     * @var int
     */
    private $unit;

    /**
     * @var Currency
     */
    private $currency;

    /**
     * @var float
     */
    private $value;

    /**
     * Rate constructor.
     * @param int $unit
     * @param Currency $currency
     * @param float $value
     */
    public function __construct(int $unit, Currency $currency, float $value)
    {
        $this->unit = $unit;
        $this->currency = $currency;
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getUnit(): int
    {
        return $this->unit;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return (string) $this->currency;
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }


    /**
     * @return string
     */
    public function __toString() : string
    {
        return number_format($this->value, 4);
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        if (in_array($name, $this->properties) && property_exists($this, $name)) {
            return $this->{$name};
        }
        return null;
    }


}