<?php

namespace Module\Customer\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot():void
    {
        $this->routes(function () {
            Route::middleware('api')
                ->prefix('customers')
                ->group(__DIR__ . '/../Routes/api.php');
        });
    }
}