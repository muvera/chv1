@extends('layouts.master')
@section('title', strip_tags($category->name))
@section ('meta_description', strip_tags($category->description))
@section('content')

<h3>{{$category->name}} <small>{{$category->description}}</small></h3>

<div class="row">
@foreach($borders as $border)
{{Form::open(['method'=>'DELETE', 'route'=>['borders.destroy', $border->id]])}}
{{Form::hidden('id', $border->id)}}

  <div class="col-sm-6 col-md-3">
    <div class="well">
  <center>
  <a href="{{route('border.show', $border->id)}}"><img src="{{asset('/images/category/'. $border->cat_id. '/' .$border->img)}}" class="thumbnail img-responsive"></a>
  </center> 
  <strong><a href="{{route('border.show', $border->id)}}">{{$border->sku}}</a></strong>

  
  <small>{{ Str::limit($border->name, 20)}} </small>
</div>
        
<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')
        <a href="{{route('borders.edit', $border->id)}}" class="btn btn-default" role="button">Edit</a> <button class="btn btn-default" type="submit">Delte</button>
        <a href="{{route('border.create')}}" class="">New Border</a>
    @endif
@endif

      
  
  </div>
	{{Form::close()}}

@endforeach


</div>


@stop


