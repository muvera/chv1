@extends('layouts.master')
@section('title', strip_tags($title))
@section('meta_description', 'Edible Image Cake Articles')

@section('content')
<h1>Show All Cake Articles</h1>


@foreach($articles as $article)
<div class="row">
	<div class="col-md-5">

<img src="{{asset('articles/' . $article->img)}}" alt="{{$article->img}}" class="thumbnail">		
	</div>
		<div class="col-md-7">
		<h2><a href="{{route('articles.show', $article->id)}}">{{$article->title}}</a> </h2>
		<p>{{$article->body}}</p>
	</div>
</div>


<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')


	| <a href="{{route('articles.edit', $article->id)}}">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['articles.destroy', $article->id]])}}
	{{Form::hidden('id', $article->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}

    @endif
@endif




<hr>
@endforeach

<a href="{{route('articles.create')}}" class="">New</a>
@stop
