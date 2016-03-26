<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\User;

use App\Models\Behavior\Timestampable;
use Phalcon\Mvc\Model;

class Details extends Model
{
    use Timestampable;

    public function getSource()
    {
        return 'user_details';
    }

    protected $user_id;

}