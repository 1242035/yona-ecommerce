<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models;

use App\Models\Behavior\Timestampable;
use Phalcon\Mvc\Model;

class User extends Model
{
    use Timestampable;

    public function getSource()
    {
        return 'user';
    }

    protected $id;
    protected $email;
    protected $name;
    protected $role;
    protected $password_hash;
    protected $password_salt;
    protected $recovery_hash;

    public function initialize()
    {

    }

}