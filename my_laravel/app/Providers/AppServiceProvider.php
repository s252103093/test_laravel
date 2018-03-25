<?php

namespace App\Providers;

use App\Http\Model\News;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 分配前台通用的 category 数据 只有是 home 后面的 view 都可以拿到这个数据
        view()->composer('admin/*', function ($view) {
            // 获取配置项
            $category = News::all();
            $assign = [
                'category' => $category
            ];
            $view->with($assign);
        });
        //
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
