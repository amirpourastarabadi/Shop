<?php

namespace Module\Customer\Providers;

use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    public function boot():void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
    $this->app->register(RouteServiceProvider::class);
    }
}