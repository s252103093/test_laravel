@extends('layouts.home')

@section('title', $title);

@section('content')
    <form action="{{ url('view/store') }}" method="post">
        {{ csrf_field() }}
        {{$title}}
        {{$name}}
        <input type="text" name="title" value=""> <br>
        <input type="text" name="content" value=""> <br>
        <button type="submit">提交</button>
    </form>
@endsection