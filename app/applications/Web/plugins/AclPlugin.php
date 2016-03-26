<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Web\Plugins;

use App\Web\Exceptions\AccessDeniedException;
use Phalcon\Events\Event;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\User\Plugin;

class AclPlugin extends Plugin
{

    public function beforeExecuteRoute(Event $event, Dispatcher $dispatcher)
    {
        $di = $dispatcher->getDI();
        $role = 'visitor';

        $currentUser = $di->get('user');
        if ($currentUser->has('id')) {
            $user = $di->get('helper')->getUser($currentUser->id);
            $role = $user->getRole();
            if (!$this->checkStatus($user->getStatus())) {
                throw new AccessDeniedException();
            }
        }
    }

}