<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store\Product\Size;

use Phalcon\Mvc\Model;

class Color extends Model
{
    public function getSource()
    {
        return 'product_size_color';
    }

    protected $id;
    protected $size_id;
    protected $product_id;
    protected $color_id;

}