<?php


namespace Kushal\ContactUs;


use Illuminate\Support\ServiceProvider;

class ContactUsServiceProvider extends ServiceProvider
{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contactUs');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/contactUs.php', 'contactUs'
        );

        $this->publishes([
            __DIR__.'/config/contactUs.php' => config_path('contactUs.php'),
            __DIR__.'/views' => resource_path('views/vendor/contactUs'),
        ]);
    }

    public function register()
    {

    }

}
