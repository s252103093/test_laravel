<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
});


// 路由模型绑定
Route::get('user_test/{user_id}', function (App\Http\Model\User $user) {
    #dd($user);
})->middleware(['test:middle_tests']);


// post 测试
Route::post('index/post_test','IndexController@post_test');
// redirect 测试
#Route::get('index/there','IndexController@there');
#Route::redirect('index/post_test','there');

Route::get('/user/{user}/pass/{pass}/iphone/{phone?}',function($user,$pass,$iphone='123'){
    p('User '.$user);
    p( 'pass '.$pass);
    p(  'iphone '.$iphone);
})->where(['user'=>'[A-Za-z]+','iphone'=>'[0-9]+']);




/* (1) 别名路由    php artisan make:controller Admin/IndexController
*   a.获取url 地址   $url = route('admin_test_profile');
*   b.进行跳转 并且 给生产的URL 地址赋予初始的值 return redirect()->route('admin_test_profile',['id'=>1]);
*/
Route::get('index/index',['as'=>'bieming','uses'=>'IndexController@index']);
Route::get('index/pass',['as'=>'pass','uses'=>'IndexController@pass'],function(){
   return route('admin_test_profile');
});
// 最好用这种方式
Route::get('admin/admin_test/',['uses'=>'Admin\IndexController@admin_test'])
    ->name('admin_test_profile');



// (2) 分组路由 中间件使用
#Route::prefix('admin')->namespace('Admin')->middleware(['middleware'=>['web','admin.login']])->group(function(){
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['web','admin.login']],function(){
    Route::any('pass_change', 'IndexController@pass_change');
    Route::get('index', 'IndexController@index');
});

// (3) 资源路由
Route::prefix('admin')->namespace('Admin')->middleware(['web'])->group(function(){

Route::resource('resour','ResourController');/*  列出所有 route  php artisan route:list  php artisan make:controller ResourController --resource */

});


Route::get('admin/login','Admin\IndexController@login');
#Route::resource('photo', 'PhotoController', ['only' => ['index', 'show']]);
//  控制器参数 示例 http://local.laravel.com/photo/edit/33/sunjianjun?appid=aso100&idfa=123
Route::prefix('photo')->group(function () {
    Route::get('index', 'PhotoController@index');
    Route::get('create', 'PhotoController@create');
    Route::get('edit/{id}/{name}', 'PhotoController@edit');
    Route::get('update/{id}', 'PhotoController@update');
    Route::get('store/{id}', 'PhotoController@store');
    Route::get('destroy/{id}', 'PhotoController@destroy');
});


//(4) 视图路由
Route::get('/views',function(){
    return view('my_laravel');
});

//(5) 传参路由
Route::get('view/index','ViewController@index');
Route::get('view/view','ViewController@view');
Route::get('view/store/id/{id}','ViewController@store');
Route::get('view/new_article','ViewController@new_article');
Route::get('view/third/user/{id}','ViewController@third');




//(6) 隐性路由模型
Route::prefix('member')->group( function(){
    Route::get('index/{member}','MemberController@index');
    Route::get('info/{id}','MemberController@info');
});

// 测试接口
Route::get('admin_test',function(){
    echo config('database.default');
});
Route::get('member/view_test','MemberController@view_test');
Route::get('member/redis_test','MemberController@redis_test');

//插入脏数据  php artisan db:seed --class UserTableSeeder
Route::get('/artisan', function () {
    $exitCode = Artisan::call('db:seed');
    return $exitCode;
});

//session 测试
Route::get('/session/show','SessionController@show');
Route::get('/session/error_test','SessionController@error_test');
Route::get('/session/log_test','SessionController@log_test')->name('session.log_test');
Route::get('/session/index',function(){
    echo config('app.log_max_files');
    echo config('app.log_level');
    $value = session('key');
    // 在 Session 中存储一条数据...
    session(['key' => 'i am session']);
});

Route::get('/urltest/index','UrlTestController@index');
Route::get('/exception/index','ExceptionController@index');

Route::get('home', function () {
    return response('Hello World', 200)
        ->withHeaders([
            'Content-Type' => 1,
            'X-Header-One' => 'Header Value',
            'X-Header-Two' => 'Header Value',
        ]) ->cookie('name_cookie', 'value', 10);;
});
