<?php

namespace Module\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Order\Database\Factories\OrderFactory;

class Order extends Model
{
    use HasFactory;

    public static function newFactory():OrderFactory
    {
        return new OrderFactory();
    }
}
