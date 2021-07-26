<?php


namespace Modules\User\Providers;


use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register auth services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap auth services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'./../Database/Migrations');
    }

}
