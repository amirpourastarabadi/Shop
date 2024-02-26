<?php

namespace Module\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->app->register(RouteServiceProvider::class);
    }
}
