<?php

namespace Module\Shipment\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{
    public function boot()
    {
        $this->routes(function(){
            Route::middleware('api')
            ->prefix('shipment')
            ->group(__DIR__.'/../Routes/api.php');
        });
    }
}