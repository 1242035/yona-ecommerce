<?php
/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */

chdir(__DIR__);
require __DIR__ . '/../vendor/autoload.php';

define('ROOT', realpath(__DIR__ . '/../') . '/');

if (php_sapi_name() == 'cli') {
    $app = new \App\Cli\Application();
} else {
    if (strpos('/api/', $_SERVER['REQUEST_URI'])) {
        $app = new \App\Api\Application();
    } else {
        $app = new \App\Web\Application();
    }
}

$app->run();