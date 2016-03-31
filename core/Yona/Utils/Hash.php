<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace Yona\Utils;

class Hash
{
    public static function generate($length = 32)
    {
        $list = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $len = mb_strlen($list, 'utf-8');

        $result = '';
        for ($i = 1; $i <= $length; $i++) {
            $result .= $list[rand(0, $len - 1)];
        }
        return $result;
    }

}