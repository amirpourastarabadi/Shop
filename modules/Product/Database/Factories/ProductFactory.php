<?php

namespace Module\Product\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Module\Product\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(random_int(5, 10)),
            'description' => $this->faker->sentence(random_int(10, 15)),
            'inventory' => random_int(0, 10),
            'unit_price' => random_int(1000000, 2000000),
        ];
    }
}
