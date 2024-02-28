<?php

namespace Module\Order\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Order\Models\Order;
use Module\Order\Models\OrderItem;
use Module\Product\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderItemFactory extends Factory
{
    protected $model = OrderItem::class;

    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'product_id' => Product::factory(),
            'quantity' => random_int(1, 10),
            'unit_price' => random_int(1000000, 2000000),
        ];
    }

    public function withProduct(Product $product)
    {
        return $this->state([
            'product_id' => $product->getKey()
        ]);
    }

    public function forOrder(Order $order)
    {
        return $this->state([
            'order_id' => $order->getKey()
        ]);
    }
}
