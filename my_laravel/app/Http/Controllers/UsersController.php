<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class UsersController extends Controller
{
    public function index(Request $request,User $user)
    {


        $route = Route::current();
       # $name = Route::currentRouteName();
        #$action = Route::currentRouteAction();
        p($route);die;
        p($name);
        p($action);
        echo 2223232311;die;
    }
}
