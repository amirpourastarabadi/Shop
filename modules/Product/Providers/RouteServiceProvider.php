<?php

namespace Module\Product\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends BaseRouteServiceProvider
{
    public function boot()
    {
        return $this->routes(function () {
            Route::middleware('api')
                ->prefix('product')
                ->group(__DIR__ . '/../Routes/api.php');
        });
    }
}
