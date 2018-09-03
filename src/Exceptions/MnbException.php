<?php
/**
 * Created by PhpStorm.
 * User: zdaniel
 * Date: 2018.09.03.
 * Time: 10:23
 */

namespace MnbClient\Exceptions;


use Throwable;

/**
 * Class MnbException
 *
 * @author zdaniel
 * @copyright Copyright (c) 2018, Proginet Kft.
 * @package MnbClient\Exceptions
 */
class MnbException extends ClientException
{

    public function __construct(\SoapFault $soapFault)
    {
        parent::__construct($soapFault->getMessage(), $soapFault->getCode(), $soapFault);
    }

}