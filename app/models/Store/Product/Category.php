<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store\Product;

use Phalcon\Mvc\Model;

class Category extends Model
{
    public function getSource()
    {
        return 'product_category';
    }

    protected $id;
    protected $product_id;
    protected $category_id;

}