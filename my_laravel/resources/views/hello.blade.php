@extends('layouts.home')

欢迎来到{{$sitename}}！

<h3>用户信息</h3>
用户名:{{$user['name']}}<br>
用户头像:{{$user['avatar']}}