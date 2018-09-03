<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.08.31.
 * Time: 15:07
 */

namespace MnbClient\ResponseType;


use Carbon\Carbon;

/**
 * Class DateInterval
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\ResponseType
 */
class DateInterval
{

    /**
     * @var Carbon
     */
    private $startDate;

    /**
     * @var Carbon
     */
    private $endDate;

    /**
     * DateInterval constructor.
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(string $startDate, string $endDate)
    {
        $this->startDate = Carbon::parse($startDate);
        $this->endDate = Carbon::parse($endDate);
    }

    /**
     * @return Carbon
     */
    public function getStartDate(): Carbon
    {
        return $this->startDate;
    }

    /**
     * @return Carbon
     */
    public function getEndDate(): Carbon
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return $this->startDate->toDateString() . ' - ' . $this->endDate->toDateString();
    }

}