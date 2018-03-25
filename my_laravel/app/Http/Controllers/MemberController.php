<?php

namespace App\Http\Controllers;

use App\Http\Model\Chapter;
use App\Http\Model\Memberss;


use App\Libraries\Org\Test;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{

    public function index(Memberss $member)
    {

        return view('member.index',compact('member'));
        echo 11;die;
        // TODO 普通方式调用
        $res = Memberss::select('xs_name','xs_author')
            ->where('id','<',10)
            ->get();
       # dump($res);
        // TODO 依赖注入方式
        $data = $member->get()->toArray();
       # dump($data);
        debug($res);

    }

    public function info($id)
    {
        //一对多关系
        $wenzhang = Memberss::find(3)->hasManyChapter;

        //多对一关系
        $res = Chapter::find(4)->dd_name;

        dd($res);
        return 'Member-info-id'.$id;
    }

    public function view_test(Request $request,Response $response)
    {

        $ress = $response->withCookie(cookie()->forever('test_cookie','i am cookie'));
        p($request->cookie('test_cookie'));
        p($request->Path());
        p($request->method());die;
        #$request->has();
       # $name =  Memberss::getMember();
        #dump($name);
        $data = DB::table('dd_name')->where('id','>',10)->get()->pluck('xs_name');//->implode(',')
        Test::pp($data);
        //return view('Member/view_test',['name'=>'dema','age'=>21]);
    }

    public function redis_test(Request $request,$id)
    {
        $post = Cache::remember('post:cache:'.$id, 10, function () use ($id) {
            return Memberss::whereId($id)->first();
        });
        $ip = $request->ip();
        event(new PostViewCount($post, $ip));
    }
}
