<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models;

use Phalcon\Mvc\Model;

class Article extends Model
{
    public function getSource()
    {
        return 'article';
    }

}