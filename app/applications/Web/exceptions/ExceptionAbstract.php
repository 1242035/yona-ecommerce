<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Exceptions;

class ExceptionAbstract extends \Exception
{
    protected $code = 404;
}