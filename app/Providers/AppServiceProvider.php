<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\SingletonPattern;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SingletonPattern::class,function(){
           return new SingletonPattern();
        });
        // $this->app->singleton(SingletonPattern::class,function(){
        //     return new SingletonPattern('Hello, foo!');
        //  });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
