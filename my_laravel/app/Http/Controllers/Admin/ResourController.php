<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Model\Resour;
use App\Http\Requests\ResourValidatorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ResourController extends Controller
{
    public function index()
    {

        $data = Resour::orderBy('id','desc')->paginate(10);
        $param1='p1';
        $param2='p2';
        return view('admin.resour.index',compact('data','param1','param2'));
    }

    //创建（显示表单）
    public function create()
    {
       return view('admin.resour.add');
    }

    //保存你创建的数据
    public function store(Request $request)
    {


        #$input = $request->except('_token');
        $input = Input::except('_token');
        $rule=[
            'ip'=>'required',
            'port'=>'required',
        ];
        $message = [
            'ip.required'=>'ip 不能为空',
            'port.required'=>'port 不能为空',
        ];
        $validator = Validator::make($input,$rule,$message);

       # $errors = $validator->errors();
       # p($errors->first('ip'));die;

        /*
         * $validator->passes()
         * $validator->fails()
         * $validator->messages()
         * */
        if($validator->passes()){

            $res = Resour::create($input);

            if($res){
                return redirect('admin/resour');#跳转到首页列表
            }else{
                return back()->with('errors','添加失败,请稍后重试');
            }
        }else{
            return back()->withErrors($validator);
        }


    }


    //显示单个对应id的内容  admin/resour/{$id}
    public function show($id)
    {
        echo $id;
    }


    //编辑（显示表单） id
    public function edit(Request $request,$id)
    {
        $field = Resour::find($id);

        return view('admin.resour.edit',compact('field'));

    }

    //保存你编辑的数据
    public function update(ResourValidatorRequest $request, $id)
    {
        $input = $request->except('_token','_method');
        $res = Resour::where('id',$id)->update($input);
        if($res){
            return redirect('admin/resour');
        }else{
            return back()->with('errors','更新失败');
        }
    }

    //删除
    public function destroy($id)
    {

        $res = Resour::where('id',$id)->delete();
        if($res){
            $data=[
                'status'=>0,
                'msg'=>'分类删除成功'
            ];
        }else{
            $data=[
                'status'=>1,
                'msg'=>'分类删除失败,稍后重试'
            ];
        }
        return $data;
    }
}
