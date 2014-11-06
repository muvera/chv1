@extends('layouts.master')
@section('title', 'Edible Image Tutorials')
@section('meta_description', 'Edible Image Cake Tutorials')

@section('content')
<h1>Show All Cake tutorials</h1>


@foreach($tutorials as $tutorial)
<div class="row">
	<div class="col-md-5">

<img src="{{asset('tutorials/' . $tutorial->img)}}" alt="{{$tutorial->img}}" class="thumbnail">		
	</div>
		<div class="col-md-7">
		<h2><a href="{{route('tutorials.show', $tutorial->id)}}">{{$tutorial->title}}</a> </h2>
		<p>{{$tutorial->body}}</p>
	</div>
</div>

<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')


	| <a href="{{route('tutorials.edit', $tutorial->id)}}">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['tutorials.destroy', $tutorial->id]])}}
	{{Form::hidden('id', $tutorial->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}

    @endif
@endif

	
<hr>
@endforeach

<a href="{{route('tutorials.create')}}" class="">New</a>
@stop
