<?php

// https://code.tutsplus.com/tutorials/how-to-register-use-laravel-service-providers--cms-28966

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\SteamApi;

class SteamApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
      //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
