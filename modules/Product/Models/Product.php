<?php

namespace Module\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Module\Product\Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Module\Order\Models\Order;

class Product extends Model
{
    use HasFactory;

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'order_items')->withPivot('order_id', 'product_id', 'quantity', 'unit_price');
    }

    public static function newFactory(): ProductFactory
    {
        return new ProductFactory();
    }
}
