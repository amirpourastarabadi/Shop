<?php

namespace Tests\Feature\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Module\Order\Models\OrderItem;
use Module\Product\Tests\ProductTestCase;
use Module\Product\Models\Product;

class ProductRelationsTest extends ProductTestCase
{
    public function test_order_belongs_to_many_orders(): void
    {
        $product = Product::factory()->create();

        $this->assertInstanceOf(Collection::class, $product->orders);
    }

    public function test_product_and_order_item_equality(): void
    {
        $product = Product::factory()->create();

        OrderItem::factory()->withProduct($product)->create();

        OrderItem::factory()->withProduct($product)->create();

        $this->assertSame($product->orders()->count(), 2);
        $this->assertNotSame($product->orders()->orderBy('id')->first()->pivot->order_id, $product->orders()->orderBy('id', 'desc')->first()->pivot->order_id);
    }
}
