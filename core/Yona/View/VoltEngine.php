<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace Yona\View;

use Phalcon\Mvc\View\Engine\Volt;

class VoltEngine extends Volt
{

    public function __construct($view, $dependencyInjector)
    {
        parent::__construct($view, $dependencyInjector);

        $this->setOptions(['compiledPath' => ROOT . 'storage/volt']);
        $this->getCompiler()
            ->addFunction('getenv', function ($resolvedArgs, $exprArgs) {
                return 'getenv(' . $resolvedArgs . ')';
            });;
    }

}