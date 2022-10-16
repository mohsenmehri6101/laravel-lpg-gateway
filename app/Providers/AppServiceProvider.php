<?php

namespace App\Providers;

use App\Http\Controllers\Gateway\GatewayInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $accepted_service;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(GatewayInterface::class, function () {
            $type = isset(request()->gateway_type) ? ucfirst(request()->gateway_type) : ucfirst('saman');

            return new ("App\Http\Controllers\Gateway\\{$type}");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

}
