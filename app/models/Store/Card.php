<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store;

use Phalcon\Mvc\Model;

class Card extends Model
{
    public function getSource()
    {
        return 'card';
    }

    protected $id;
    protected $product_id;
    protected $size_id;
    protected $color_id;
    protected $quantity;

}