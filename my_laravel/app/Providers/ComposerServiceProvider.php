<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        //  share是共享所有视图
        view()->share('sitename','<h1>视图间共享数据</h1>');



        //composer可以只是指定某个视图 分配给 third 视图中 变量   用法:登录用户信息
        view()->composer(['third','article'],function($view){
            $view->with('user',array('name'=>'test','avatar'=>'/path/to/test.jpg'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
