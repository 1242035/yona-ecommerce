<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace Yona;

use Phalcon\Acl as PhalconAcl;

class Acl extends PhalconAcl\Adapter\Memory
{

    public function __construct()
    {
        parent::__construct();

        $this->setDefaultAction(PhalconAcl::DENY);

        /**
         * Full list of Roles
         */
        $roles = [];
        $roles['visitor'] = new PhalconAcl\Role('visitor', 'Visitor');
        $roles['admin'] = new PhalconAcl\Role('admin', 'Admin');

        /**
         * Add roles
         */
        $this->addRole($roles['visitor']);
        $this->addRole($roles['admin']);

        /**
         * Include resources permissions list from file /app/config/acl.php
         */
        $resources = include ROOT . '/config/acl.php';

        foreach ($resources as $roles_resources) {
            foreach ($roles_resources as $resource => $actions) {
                $registerActions = '*';
                if (is_array($actions)) {
                    $registerActions = $actions;
                }
                $this->addResource(new PhalconAcl\Resource($resource), $registerActions);
            }
        }

        /**
         * Make unlimited access for admin role
         */
        $this->allow('admin', '*', '*');

        /**
         * Set roles permissions
         */
        foreach ($roles as $k => $role) {
            $user_resource = $resources[$k];
            foreach ($user_resource as $roles_resources => $method) {
                if ($method == '*') {
                    $this->allow($k, $roles_resources, '*');
                } else {
                    $this->allow($k, $roles_resources, $method);
                }

            }
        }

    }

}