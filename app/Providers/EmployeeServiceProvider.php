<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmployeeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Employees\EmployeeRepositoryInterface::class,
            \App\Repositories\Employees\EmployeeRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     * 
     */
    public function boot()
    {
        //
    }
}
