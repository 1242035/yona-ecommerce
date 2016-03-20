<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Frontend;

use Phalcon\Mvc\ModuleDefinitionInterface;
use Phalcon\DiInterface;

class Module implements ModuleDefinitionInterface
{

    public function registerAutoloaders(DiInterface $dependencyInjector = null)
    {
    }

    public function registerServices(DiInterface $di)
    {
        $di->get('dispatcher')->setDefaultNamespace('App\Web\Frontend\Controllers');
        $di->get('view')
            ->setMainView('frontend/main');
        return $di;
    }

}