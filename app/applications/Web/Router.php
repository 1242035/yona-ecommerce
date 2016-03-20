<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web;

use App\Web\Dashboard\RouterGroups\DashboardIndex;
use App\Web\Frontend\RouterGroups\FrontendIndex;

class Router extends \Phalcon\Mvc\Router
{

    public function __construct()
    {
        parent::__construct(true);

        $this->setDefaultModule('frontend');
        $this->setDefaultController('index');
        $this->setDefaultAction('index');

        // Frontend
        $this->mount(new FrontendIndex());

        // Dashboards
        $this->mount(new DashboardIndex());
    }

}