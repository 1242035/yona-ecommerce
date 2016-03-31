<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models;

use App\Models\Behavior\Timestampable;
use Phalcon\Mvc\Model;
use Yona\Utils\Hash;

class User extends Model
{
    use Timestampable;

    public function getSource()
    {
        return 'user';
    }

    protected $id;
    protected $email;
    protected $first_name;
    protected $last_name;
    protected $role;
    protected $password_hash;
    protected $password_salt;
    protected $recovery_hash;

    public function initialize()
    {

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password_salt = Hash::generate(rand(22, 32));
        $options = [
            'cost' => 11,
            'salt' => $this->password_salt
        ];
        $this->password_hash = password_hash($password . $this->password_salt, PASSWORD_DEFAULT, $options);
        return $this;
    }

    public function passwordVerify($password)
    {
        return password_verify($password . $this->password_salt, $this->password_hash);
    }

    public function getRecoveryHash()
    {
        return $this->recovery_hash;
    }

    public function setRecoveryHash($recovery_hash)
    {
        $this->recovery_hash = $recovery_hash;
        return $this;
    }

}