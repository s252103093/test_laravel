<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExceptionController extends Controller
{
    //
    public function index()
    {
       abort(500);
       #event()
    }
}
