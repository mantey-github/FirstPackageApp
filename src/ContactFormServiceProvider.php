<?php

/**
 * Created by PhpStorm.
 * User: mantey
 * Date: 30/01/2019
 * Time: 4:45 PM
 */

namespace mantey\contactform;
//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ContactFormServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');

        $this->loadMigrationsFrom(__DIR__.'/Database/migrations');
    }

    public function register()
    {

    }

    
}