<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace Yona;

use Yona\View\VoltEngine;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;

class View extends \Phalcon\Mvc\View
{

    public function __construct($options = [])
    {
        parent::__construct($options);

        $this->registerEngines([
            '.phtml' => new PhpEngine($this, $this->getDI()),
            '.volt'  => new VoltEngine($this, $this->getDi()),
        ]);
    }

}