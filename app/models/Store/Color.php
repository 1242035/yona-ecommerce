<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store;

use Phalcon\Mvc\Model;

class Color extends Model
{
    public function getSource()
    {
        return 'color';
    }

    protected $id;

}