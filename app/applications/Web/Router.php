<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web;


use App\Web\Dashboard\Routes\DashboardIndexGroup;
use App\Web\Frontend\Routes\FrontendIndexGroup;

class Router extends \Phalcon\Mvc\Router
{

    public function __construct()
    {
        parent::__construct(true);

        $this->setDefaultModule('frontend');
        $this->setDefaultController('index');
        $this->setDefaultAction('index');

        // Frontend
        $this->mount(new FrontendIndexGroup());

        // Dashboards
        $this->mount(new DashboardIndexGroup());
    }

}