<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
       $data=[
           'name'=> 'my_view',
           'param2'=> 'param2',
           'score'=> 100,
           'num'=> 5,
           'article'=> [
               11,22,33,44,55
           ],
       ];
       $title = 'this is title';
        return view('view.my_laravel',compact('data','title'));
    }

    public function view()
    {
        return view('view.view');
    }

    public function new_article()
    {
        return view('article');
    }

    public function third($id)
    {

        return view('third');

    }
    /**
     * 储存一个新用户。
     *
     * @param  Request  $request
     *
     */
    public function store(Request $request,$id)
    {

         $url2 = $request->url();
         $method = $request->method();
         $input = $request->all();
         $name = $request->query('name', 'Helen');
         if ($request->isMethod('post')) {
            echo 'post';
         }
         if ($request->has('name')) {
             echo 'name';
         }
         echo '<pre>';

         var_dump($name);
         var_dump($input);
         var_dump($url2);
         var_dump($id);
         var_dump($method);

    }
}
