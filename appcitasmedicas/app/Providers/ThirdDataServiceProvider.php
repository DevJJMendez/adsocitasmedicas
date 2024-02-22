<?php

namespace App\Providers;

use App\Services\ThirdDataService;
use Illuminate\Support\ServiceProvider;

class ThirdDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('ThirdDataService', function ($app) {
            return new ThirdDataService(/* Argumentos opcionales si los hay */);
        });
    }
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
