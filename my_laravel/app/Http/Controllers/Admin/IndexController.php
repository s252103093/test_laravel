<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function index(Request $request)
    {

        $value = $request->session()->get('admin');
        p($value);
        echo 111;die;

    }
    public function login()
    {
        session(['admin'=>'root']);
       echo '登录';
    }

    public function admin_test($bieming_id)
    {
        p($bieming_id);
       echo config('app.name');
    }


    //更改超级管理员密码
    public function pass_change()
    {
        if($input = Input::all()){

            $rules = [
                'password'=>'required|between:6,20|confirmed',
            ];

            $message = [
                'password.required'=>'新密码不能为空！',
                'password.between'=>'新密码必须在6-20位之间！',
                'password.confirmed'=>'新密码和确认密码不一致！',
            ];

            $validator = Validator::make($input,$rules,$message);

            if($validator->passes()){
                $user = User::first();

                $_password = ($user->user_pass);
                if($input['password_o']==$_password){
                    $user->user_pass = ($input['password']);
                    $user->update();
                    return back()->with('errors','密码修改成功！');
                }else{

                    return back()->with('errors','原密码错误！');
                }
            }else{
                return back()->withErrors($validator);
            }

        }else{

            return view('admin.pass_change');
        }
    }

}
