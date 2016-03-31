<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Frontend\Controllers;

use App\Models\User;
use Yona\Controller\WebController;

class IndexController extends WebController
{

    public function indexAction()
    {
        $this->tag->prependTitle('Homepage');


    }

}