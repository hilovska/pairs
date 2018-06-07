<?php

namespace Hilovska\Pairs;

use Illuminate\Support\ServiceProvider;
use Hilovska\Pairs\Console\Commands\PrintPairs;

class PairsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                PrintPairs::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
