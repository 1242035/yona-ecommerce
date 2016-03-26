<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web;

use Phalcon\Loader;
use Yona\ServiceLoader;

class Application extends \Phalcon\Mvc\Application
{

    public function run()
    {
        $dotenv = new \Dotenv\Dotenv(ROOT . 'config/env');
        $dotenv->load();
        $dotenv->required(include ROOT . 'config/env/.env.required.php');

        $di = new \Phalcon\DI\FactoryDefault();

        $config = include ROOT . 'config/services.php';
        $serviceLoader = new ServiceLoader($config, $di, ['web']);
        $di->set('serviceLoader', $serviceLoader, true);

        // Error Handling
        //$di->get('eventsManager')->attach('dispatch', $di->get('errorHandler'));
        // Acl
        $di->get('eventsManager')->attach('dispatch', $di->get('acl'));

        // Phalcon Tag
        \Phalcon\Tag::setTitleSeparator(" - ");
        \Phalcon\Tag::setTitle(getenv('WEBSITE_TITLE'));

        // Set Application DI
        $this->setDI($di);

        //Register modules
        $this->registerModules([
            'frontend'  => [
                'className' => 'App\Web\Frontend\Module',
                'path'      => __DIR__ . '/modules/Frontend/Module.php',
            ],
            'dashboard' => [
                'className' => 'App\Web\Dashboard\Module',
                'path'      => __DIR__ . '/modules/Dashboard/Module.php',
            ],
        ]);

        // Register modules namespaces
        $loader = new Loader();
        $loader->registerNamespaces([
            'App\Web\Dashboard' => __DIR__ . '/modules/Dashboard',
            'App\Web\Frontend'  => __DIR__ . '/modules/Frontend',
        ]);
        $loader->register();

        echo $this->handle()->getContent();
    }

}