<?php

/**
 * @author Oleksandr Torosh <webtorua@gmail.com>
 */
namespace App\Models\Store;

use Phalcon\Mvc\Model;

class Order extends Model
{
    const STATUS_NEW = 'new';
    const STATUS_IN_WORK = 'in_work';

    public function getSource()
    {
        return 'order';
    }

    public static $deliveries = [
        'shipment' => 'Shipment',
        'post'     => 'Post'
    ];

    public static $payments = [
        'cash' => 'Cash',
        'card' => 'Card'
    ];

    public static $order_statuses = [
        self::STATUS_NEW     => 'New',
        self::STATUS_IN_WORK => 'In work',
        'canceled'           => 'Canceled',
        'done'               => 'Done',
    ];

    public static $payment_statuses = [
        'not_payed' => 'Not payed',
        'refunded'  => 'Refunded',
        'payed'     => 'Payed',
    ];

    protected $id;
    protected $user_id;
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $phone;
    protected $delivery_way;
    protected $delivery_address;
    protected $payment_way;
    protected $payment_status;
    protected $order_status;
    protected $customer_comment;
    protected $manager_comment;

}