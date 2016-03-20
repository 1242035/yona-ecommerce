<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace Yona\Route;

class AjaxFilter
{

    public function check()
    {
        return (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest');
    }

}