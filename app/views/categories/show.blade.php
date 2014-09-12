@extends('layouts.master')
@section('title', strip_tags($category->name))
@section ('meta_description', strip_tags($category->description))
@section('content')

<h3>{{$category->name}} <small>{{$category->description}}</small></h3>

<div class="row">
  
@foreach($borders as $border)
{{Form::open(['method'=>'DELETE', 'route'=>['borders.destroy', $border->id]])}}
{{Form::hidden('id', $border->id)}}

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">

      <a href="{{route('borders.show', $border->id)}}"><img src="/borders/thumb/{{$border->file}}" ></a>
      <h5><a href="{{route('borders.show', $border->id)}}">{{$border->name}}</a></h5>
        
<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')
        <a href="{{route('borders.edit', $border->id)}}" class="btn btn-default" role="button">Edit</a> <button class="btn btn-default" type="submit">Delte</button>

        <a href="{{route('borders.create')}}" class="">New Border</a>
    @endif
@endif

      
    </div>
  </div>
	{{Form::close()}}

@endforeach


</div>



@include('pages.categories')
@stop


