<?php

chdir(__DIR__);
$ROOT = realpath(__DIR__ . '/../../');

$dotenv = new \Dotenv\Dotenv($ROOT . '/config/env');
$dotenv->load();
$dotenv->required(include $ROOT . '/config/env/.env.required.php');

return [
    'paths'        => [
        'migrations' => $ROOT . '/storage/migrations',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        getenv('APP_ENV')         => [
            'adapter'   => 'mysql',
            'host'      => getenv('DB_HOST'),
            'name'      => getenv('DB_NAME'),
            'user'      => getenv('DB_USER'),
            'pass'      => getenv('DB_PASS'),
            'port'      => 3306,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci'
        ]
    ]
];