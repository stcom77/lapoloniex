<?php

namespace stcom77\Poloniex;

use Illuminate\Support\ServiceProvider;
use stcom77\Poloniex\Console\PoloniexPushSupervisor;

class PoloniexServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/poloniex.php' => config_path('poloniex.php'),
        ], 'poloniex');
    }

    public function register()
    {
        $this->app->bind('poloniex', function ($app) {
            return new PoloniexManager($app);
        });

        $this->commands([
            PoloniexPushSupervisor::class
        ]);
    }
}
