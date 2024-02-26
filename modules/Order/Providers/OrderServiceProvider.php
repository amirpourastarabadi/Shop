<?php

namespace Module\Order\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->app->register(RouteServiceProvider::class);
    }
}
