<?php

namespace App\Http\Controllers;

use App\Http\Model\Index;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index()
    {
        return route('admin_test_profile');
        $res = Index::all();

        // 查询
        $select = DB::select('select * from dd_name limit 51');
        p($select);die;
        $dd = DB::table('dd_name')->whereRaw('id >= ? and age > ?', [2, 16])->orderBy('id','desc')->limit(5)->get();
        // 插入
        $id = DB::insert('insert into dd_name(xs_name, xs_author,category) values(?, ?,?)', ['test', '九把刀','言情']);
        $id = DB::table('dd_name')->insert(['xs_name'=>'test2','xs_author'=>'九把刀','category'=>'言情']);
        //  修改
        $row = DB::update('update dd_name set xs_name= ? where xs_author= ?', ['test_update', '九把刀']);
        $row = DB::table('dd_name')->where('xs_name','test')->update(['xs_author'=>'巴八刀']);


        #$res = Index::where('id',3)->get();
        $res = Index::find(1)->get();
        dd($res);
       return view('welcome');
    }

    //重定向 命名路由示例
    public function route_test()
    {
        //  作用1:重定向
        # return redirect()->route('profile');
        //  作用2:路径跳转
        #$url = route('profile');

    }

    public function info()
    {
        echo 11;die;
    }
    public function pass()
    {

        echo '别名路由  this is pass route';die;
    }

    public function post_test()
    {

        echo 'i am post method';
    }
    public function there()
    {

        echo 'i am post there';
    }

}
