<?php

namespace Module\Order\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Order\Models\Order;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'customer_id' => 1,
            'status' => 1,
        ];
    }
}
