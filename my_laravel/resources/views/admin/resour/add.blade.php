@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 友情链接管理
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>添加ip</h3>
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin/resour/create')}}"><i class="fa fa-plus"></i>添加链接</a>
            <a href="{{url('admin/resour')}}"><i class="fa fa-recycle"></i>全部ip</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/resour')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th><i class="require">*</i>ip名称：</th>
                <td>
                    <input type="text" name="ip">
                    <span><i class="fa fa-exclamation-circle yellow"></i>ip名称必须填写</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i> port：</th>
                <td>
                    <input type="text" class="lg" name="port">
                </td>
            </tr>
            <tr>
                <th>速度：</th>
                <td>
                    <input type="text" class="lg" name="speed">
                </td>
            </tr>
            <tr>
                <th>类型：</th>
                <td>
                    <input type="text" class="sm" name="proxy_type" >
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

@endsection
