<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store\Product;

use Phalcon\Mvc\Model;

class Size extends Model
{
    public function getSource()
    {
        return 'product_size';
    }

    protected $id;
    protected $product_id;
    protected $price;
    protected $old_price;
    protected $available;

}