<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Exceptions;

class AccessDeniedException extends ExceptionAbstract
{

    protected $code = 401;
    protected $message = 'Access denied';

}