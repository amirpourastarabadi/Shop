<?php

namespace Module\Order\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Module\Order\Database\Factories\OrderItemFactory;
use Module\Product\Models\Product;

class OrderItem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function newFactory():OrderItemFactory
    {
        return new OrderItemFactory();
    }
}
