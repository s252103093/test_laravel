<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

trait Throt
{
    public function trait_test()
    {
        echo 'i am trait';
    }
}

class PhotoController extends Controller
{
    use Throt;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        # 设置 cookie
        $cookie_forget = Cookie::forget('set_test_1');
        $cookie_set = Cookie::make('set_test_2', 'Hello, Laramist', 10);
        #另一种定义cookie的方法  ->cookie('name', 'value', $minutes);
        return response()->view('index')->withCookie($cookie_forget)->withCookie($cookie_set)->header('X-Header-One', 'Header Value');
        #return response()->json([ 'name' => 'Abigail', 'state' => 'CA']);;
        echo 11;die;
        //
        $data = DB::table('dd_name as a')
            ->where('a.id','<','10')
            ->where('a.id','>','3')
            ->leftJoin('dd_chaptername as c','c.num_id','a.name_id')
            ->groupBy('a.id')
            ->orderBy('a.id','desc')
            ->limit(2)
            ->select('a.xs_author','a.xs_name'); #  ->get()->toArray();

        #$data = DB::table('dd_name')->where('id','<','10')->whereIn('id',[3,5])->get();
        dump($data);
        echo  'index page!!!';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo  'store page';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id,$name)
    {
        //  http://local.laravel.com/photo/edit/33/sunjianjun?appid=aso100&idfa=123
        # 设置 cookie
       # $cookie_forget = Cookie::forget('set_test_1');
        $cookie = $request->cookie(); #获取 cookie
        $cookie_set = Cookie::make('set_test_24', 'Hello, Laramist', 10);

        var_dump($cookie);die;
        #另一种定义cookie的方法  ->cookie('name', 'value', $minutes);
        #return response()->view('index')->withCookie($cookie_set)->header('X-Header-One', 'Header Value');
        #return response()->json([ 'name' => 'Abigail', 'state' => 'CA']);;


        $cookie = $request->cookie(); #获取 cookie
        #cookie 操作
         #Cookie::queue('set_test_33', 'Hello, Laramist');
        $cookie_set = Cookie::make('set_test_2', 'Hello, Laramist', 10);

        dump($cookie);
       return response()->view('index')->withCookie($cookie_set);

        $aso100 = $request->input('appid');
        $all = $request->all();
        $only = $request->only('appid');
        $except = $request->except('idfa');
        $idfa   = request()->input('idfa');
        echo '<pre>';
        dump($aso100);
        dump($idfa);
        dump($all);
        dump($only);
        dump($except);
        echo '</pre>';
        echo      '地址栏传的参数是：'.$id;
        $title = '编辑';
        return view('photo.edit',compact('id','title','name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
