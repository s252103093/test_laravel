<?php

namespace App\Providers;

use App\Exceptions\MongoHandler;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class SessionServiceProvider extends ServiceProvider
{


    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //  config/app.php 设置 服务提供者
        Session::extend('mongo',function(){
           return new MongoHandler();
        });


        parent::boot();

    }
}
