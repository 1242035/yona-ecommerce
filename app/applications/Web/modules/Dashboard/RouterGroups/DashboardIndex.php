<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Dashboard\RouterGroups;

use Phalcon\Mvc\Router\Group;

class DashboardIndex extends Group
{

    public function __construct()
    {
        parent::__construct([
            'module' => 'dashboard',
            'controller' => 'index'
        ]);

        $this->setPrefix('/dashboard');

        $this->addGet('', 'index')
            //    ->beforeMatch([new AjaxFilter(), 'check'])
        ;
    }

}