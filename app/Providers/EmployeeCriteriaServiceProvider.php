<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class EmployeeCriteriaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            \App\Repositories\EmployeeCriterias\EmployeeCriteriaRepositoryInterface::class,
            \App\Repositories\EmployeeCriterias\EmployeeCriteriaRepository::class,
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
