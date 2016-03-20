<?php
/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */

return [
    // Environment
    'web'           => [
        'default'  => getenv('APP_ENV'),
        'adapters' => [
            'development' => function (\Phalcon\DI\FactoryDefault $di) {
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);

                $di->get('debug')->listen();
            },
            'production'  => function () {
                ini_set('display_errors', 0);
                ini_set('display_startup_errors', 0);
            },
        ],
    ],

    // Main Services
    //'loader'        => '\Phalcon\Loader',
    'eventsManager' => '\Phalcon\Events\Manager',
    'dispatcher'    => [
        'className' => '\Phalcon\Mvc\Dispatcher',
        'calls'     => [
            [
                'method'    => 'setEventsManager',
                'arguments' => [
                    [
                        'type' => 'service',
                        'name' => 'eventsManager',
                    ],
                ],
            ],
        ],
    ],
    'db'            => [
        'className' => '\Phalcon\Db\Adapter\Pdo\Mysql',
        'arguments' => [
            'arguments' => [
                'type'  => 'parameter',
                'value' => [
                    'host'     => getenv('DB_HOST'),
                    'dbname'   => getenv('DB_NAME'),
                    'username' => getenv('DB_USER'),
                    'password' => getenv('DB_PASS'),
                ],
            ],
        ],
    ],
    'view'          => '\Yona\View',
    //'acl'           => '\Yona\Plugin\AclPlugin',
    'session'       => [
        'default'  => getenv('SESSION_ADAPTER'),
        'adapters' => [
            'files' => [
                'className' => '\Phalcon\Session\Adapter\Files',
                'calls'     => [
                    [
                        'method' => 'start',
                    ],
                ],
            ],
            'redis' => [
                'className' => '\Phalcon\Session\Adapter\Redis',
                'arguments' => [
                    [
                        'type'  => 'parameter',
                        'value' => [
                            'host'       => getenv('REDIS_HOST'),
                            'port'       => getenv('REDIS_PORT'),
                            'persistent' => getenv('REDIS_PERSISTENT'),
                            'lifetime'   => getenv('REDIS_LIFETIME'),
                            'prefix'     => getenv('REDIS_PREFIX'),
                            'uniqueId'   => getenv('REDIS_UNIQUE_ID'),
                        ],
                    ],
                ],
                'calls'     => [
                    [
                        'method' => 'start',
                    ],
                ],
            ],
        ],
    ],
    'cache'         => [
        'default'  => getenv('CACHE_ADAPTER'),
        'adapters' => [
            'files'     => [
                'className' => 'Phalcon\Cache\Backend\File',
                'arguments' => [
                    [
                        'type'      => 'instance',
                        'className' => '\Phalcon\Cache\Frontend\Data',
                        'arguments' => [
                            [
                                'type'  => 'parameter',
                                'value' => [
                                    "lifetime" => 60,
                                    "prefix"   => 'yona',
                                ],
                            ],
                        ],
                    ],
                    [
                        'type'  => 'parameter',
                        'value' => [
                            "cacheDir" => __DIR__ . '/../../data/cache/backend/',
                        ],
                    ],
                ],
            ],
            'memcached' => [
                'className' => 'Phalcon\Cache\Backend\Libmemcached',
                'arguments' => [
                    [
                        'type'      => 'instance',
                        'className' => '\Phalcon\Cache\Frontend\Data',
                        'arguments' => [
                            "servers" => [
                                [
                                    "host"   => getenv('MEMCACHE_HOST'),
                                    "port"   => getenv('MEMCACHE_PORT'),
                                    "weight" => "1",
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'modelsCache'   => ['type' => 'service', 'name' => 'cache'],
    'debug'         => '\Phalcon\Debug',
    'userSession'   => [
        'className' => '\Phalcon\Session\Bag',
        'arguments' => [
            ['type' => 'parameter', 'value' => 'user'],
        ],
    ],

    // Application Helpers

    // Custom services

];