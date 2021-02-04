<?php

namespace Domain\User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->register(UserRouteServiceProvider::class);

        $this->loadMigrations();
        $this->loadViews();

        // register more domain specific classes here ...
        // (look at the available methods from ServiceProvider)
    }

    private function loadMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../Migrations');
    }

    private function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'UserViews');
    }
}
