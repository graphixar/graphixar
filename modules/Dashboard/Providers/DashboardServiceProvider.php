<?php


namespace Modules\Dashboard\Providers;


use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'./../Routes/web.php');
        $this->loadViewsFrom(__DIR__.'./../Resources/views' , 'dashboard');
    }

}
