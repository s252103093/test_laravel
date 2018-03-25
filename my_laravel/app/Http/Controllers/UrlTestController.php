<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UrlTestController extends Controller
{
    //

    public function index()
    {

        $route = Route::current();

        $name = Route::currentRouteName();

        $action = Route::currentRouteAction();
        $url = action('SessionController@error_test');
        dump($route);
        dump($name);
        dump($action);
        dump($url);
        echo route('session.log_test');die;
    }
}
