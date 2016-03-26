<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store\Product;

use Phalcon\Mvc\Model;

class Image extends Model
{
    public function getSource()
    {
        return 'product_image';
    }

    protected $id;
    protected $product_id;

}