<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 15:04
 */

namespace MnbClient\ResponseType;


use MnbClient\Exceptions\ClientException;

/**
 * Class Currency
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\ResponseType
 *
 * @property-read string $code
 * @property-read float|null $unit
 */
class Currency
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var float|int
     */
    private $unit;

    /**
     * Currency constructor.
     * @param string $currency
     * @param float|null $unit
     */
    public function __construct(string $currency, float $unit = null)
    {
        if (strlen($currency) !== 3 ) {
            throw new ClientException('Currency code length must be 3 characters');
        }

        $this->code = strtoupper($currency);
        $this->unit = $unit;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getCode() : string {
        return $this->code;
    }

    /**
     * @return float
     */
    public function getUnit() : ?float {
        return $this->unit;
    }

    /**
     * @param $name
     * @return string|float|null
     */
    public function __get($name)
    {
        switch ($name) {
            case 'code':
                return $this->code;
            case 'unit':
                return $this->unit;
        }
        return null;
    }

}