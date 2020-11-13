<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CriteriaServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(
            \App\Repositories\Criterias\CriteriaRepositoryInterface::class,
            \App\Repositories\Criterias\CriteriaRepository::class,
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
