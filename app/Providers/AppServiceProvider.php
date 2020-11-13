<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $models = array(
        //     'Employee',
        //     'Criteria',
        // );
        
        // foreach ($models as $model) {
        //     $this->app->bind("\App\Repositories\{$model}s\{$model}RepositoryInterface::class,", "App\Repositories\{$model}s\{$model}Repository::class");
        // }
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
