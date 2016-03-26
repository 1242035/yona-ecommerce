<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Dashboard;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\DiInterface;

class Module implements ModuleDefinitionInterface
{

    public function registerAutoloaders(DiInterface $dependencyInjector = null)
    {

    }

    public function registerServices(DiInterface $di)
    {
        $di->get('dispatcher')->setDefaultNamespace('App\Web\Dashboard\Controllers');
        $di->get('view')
            ->setViewsDir(ROOT . '/app/views/dashboard/')
            ->setMainView('main');
        return $di;
    }

}