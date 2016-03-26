<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Dashboard\RouterGroups;

use Phalcon\Mvc\Router\Group;

class DashboardAuth extends Group
{

    public function __construct($paths)
    {
        parent::__construct([
            'module' => 'dashboard',
            'index' => 'auth'
        ]);

        $this->setPrefix('');

        $this->add('/login', 'login');
        $this->add('/logout', 'logout');
        $this->add('/auth/forgot', 'forgotPassword');
    }

}