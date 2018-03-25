@extends('layouts.home')

@section('content')
    @parent
    <div class="middle">我是 third 区域的替换内容</div>
    <div class="middle">    {{csrf_token()}}</div>
    {{$sitename}}首页!!!!!!!!!!


    用户名:{{$user['name']}}<br>
    用户头像:{{$user['avatar']}}
@endsection