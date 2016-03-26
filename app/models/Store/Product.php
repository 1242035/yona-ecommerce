<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store;

use App\Models\Behavior\Timestampable;
use Phalcon\Mvc\Model;

class Product extends Model
{

    use Timestampable;

    public function getSource()
    {
        return 'product';
    }

    protected $id;
    protected $primary_category_id;
    protected $primary_image_id;
    protected $price;
    protected $old_price;

}