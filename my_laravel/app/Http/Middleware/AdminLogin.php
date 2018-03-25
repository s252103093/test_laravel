<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        #session(['admin'=>null]); //根据 session 判断

        if(!session('admin')){
           return redirect('admin/login');
        }

        return $next($request);
    }

    // 终止中间件
    public function terminate($request, $response)
    {

        #echo  'terminate';die;
        // Store the session data...
    }
}
