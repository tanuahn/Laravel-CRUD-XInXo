<?php

namespace App\Providers;

use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\ProductRepsitoryImpl;
use App\Http\Services\ProductService;
use App\Http\Services\ProductServiceImpl;
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
        $this->app->singleton(
            ProductRepository::class,
            ProductRepsitoryImpl::class
        );

        $this->app->singleton(
            ProductService::class,
            ProductServiceImpl::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
