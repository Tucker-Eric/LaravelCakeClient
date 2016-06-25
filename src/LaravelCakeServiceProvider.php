<?php

namespace LaravelCake;

use Illuminate\Support\ServiceProvider;
use Cake\Client;

class LaravelCakeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/cake.php' => config_path('cake.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('cake', function () {
            return new Client([
                'affiliate_id' => config('cake.affiliate_id'),
                'api_key'      => config('cake.api_key'),
                'domain'       => config('cake.domain')
            ]);
        });
    }
}
