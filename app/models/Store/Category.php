<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store;

use Phalcon\Mvc\Model;

class Category extends Model
{
    public function getSource()
    {
        return 'category';
    }

    protected $id;

}