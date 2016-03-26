<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models;

use Phalcon\Mvc\Model;

class Page extends Model
{
    public function getSource()
    {
        return 'page';
    }


}