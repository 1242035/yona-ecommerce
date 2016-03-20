<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Frontend\Routes;

use Phalcon\Mvc\Router\Group;

class FrontendIndexGroup extends Group
{

    public function __construct()
    {
        parent::__construct([
            'module' => 'frontend',
            'controller' => 'index'
        ]);

        $this->setPrefix('/');

        $this->addGet('', ['index']);
    }

}