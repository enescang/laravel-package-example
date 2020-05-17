<?php
namespace Kodlib\Jsoon\Providers;

use Illuminate\Support\ServiceProvider;
use Kodlib\Jsoon\Providers\QuickMetrics;
class JsoonServiceProvider extends ServiceProvider{

    public function boot()
    {
        //dd("we are providing");
    }

    public function register()
    {
        $this->app->singleton(QuickMetrics::class, function(){
            return new QuickMetrics();
        });
    }
}