<?php

namespace Confee\Units\Authentication\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class UnitServiceProvider.
 */
class UnitServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}