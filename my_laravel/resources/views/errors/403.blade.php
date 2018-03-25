
@extends('errors::layout')

@section('title', 'Service Unavailable')

{{$exception->getMessage()}}
@section('message', '')