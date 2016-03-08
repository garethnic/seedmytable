<?php

namespace garethnic\seedmytable;

use Illuminate\Support\ServiceProvider;

class seedmytableServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
          __DIR__.'/seeder/DatabaseSeeder.php' => base_path('database/seeds/DatabaseSeeder.php')
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
