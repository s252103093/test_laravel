<?php

namespace App\Http\Controllers;

use HttpException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SessionController extends Controller
{
    //

    public function show(Request $request)
    {
        // (1)字符串
        $value = $request->session()->get('key');
        $data = $request->session()->all();
        $has_exists = $request->session()->has('key'); # exists

        // (2) 数组
        $request->session()->put('user.name', 'jiabo'); # session(['key' => 'value']);
        p(session('user'));

        #$request->session()->push('user.age', '23');  #新增一条
        #$value = $request->session()->pull('user.age'); #获取数据 并删除一条

        // (3) 闪存操作
        $request->session()->flash('status', 'Task was successful!');#闪存
        $request->session()->flash('status2', 'i am status2');#闪存
        $request->session()->reflash();#闪存恢复
        $request->session()->keep(['status']);
        p(session('status'));
        p(session('status2'));
       # p($value);
        // (4) 删除数据
        $request->session()->forget('user.name');
        $request->session()->flush(); #删除所有
        p(session('user'));

        $res = $request->session()->regenerate();
        p($res);
    }

    public function show_session(Request $request)
    {

    }

    public function error_test()
    {
        $id='111111111';
        $message='22222222222';
        Log::info('Showing user profile for user: '.$id);

        //log_level  定义critical 日志只输出 alert 和 emergency
        Log::emergency($message);  #紧急，如系统挂掉 错误值最高.
        Log::alert($message);
        Log::critical($message);   #严重问题，如异常
        Log::error($message);
        Log::warning($message);
        Log::notice($message);
        Log::info($message);
        Log::debug($message);       #详细的调试信息 错误值最低


        $monolog = Log::getMonolog();
        dump($monolog);
        #$request->sessin()->keep(['status']);
        #return view('errors.404');

    }

    public function log_test()
    {
        abort(404);die;

        return view('errors.404')->with($exception);
        $writer = app('log');
        $dispatcher = $writer->getEventDispatcher();
        $dispatcher->listen(\Illuminate\Log\Events\MessageLogged::class, function ($event) {
            // 监听器的内容
            echo 11;die;
        });
    }
}
