<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FrontRepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Front\Customer\CustomerRepositoryInterface',
            'App\Repositories\Front\Customer\CustomerRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
