<?php

namespace App\Providers;

use App\Services\EntityDataService;
use Illuminate\Support\ServiceProvider;

class EntityDataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('EntityDataService', function ($app) {
        return new EntityDataService(/* Argumentos opcionales si los hay */);
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
