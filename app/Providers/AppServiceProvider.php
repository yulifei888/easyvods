<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use EasyVod\Facades\EasyVodFacade as Ev;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        View::addExtension("ev", "blade");
        Ev::init(["type"=>webconfig("method")]);
    }
}
