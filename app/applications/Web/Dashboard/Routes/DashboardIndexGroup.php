<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Dashboard\Routes;

use Phalcon\Mvc\Router\Group;

class DashboardIndexGroup extends Group
{

    public function __construct()
    {
        parent::__construct([
            'module' => 'dashboard',
            'controller' => 'index'
        ]);

        $this->setPrefix('/dashboard');

        $this->addGet('', ['index'])
            //    ->beforeMatch([new AjaxFilter(), 'check'])
        ;
    }

}