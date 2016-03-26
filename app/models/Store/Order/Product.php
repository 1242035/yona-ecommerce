<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store\Order;

use Phalcon\Mvc\Model;

class Product extends Model
{
    public function getSource()
    {
        return 'order_product';
    }

    protected $id;
    protected $product_id;
    protected $size_id;
    protected $color_id;
    protected $price;
    protected $quantity;

}