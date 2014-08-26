@extends('layouts.admin')
@section('main_menu')
    @parent
@stop
@section('content')

<h1>Welcome <small>{{$user->username}}</small></h1>



@stop