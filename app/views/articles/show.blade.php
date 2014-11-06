@extends('layouts.master')
@section('title', strip_tags($article->title))
@section('meta_description', Str::limit($article->body, 40))
@section('content')

<div class="row">
	
	<div class="col-md-5"><img src="{{asset('articles/'. $article->img)}}" alt="$article->img"></div>
	<div class="col-md-7">
	<h1>{{$article->title}}</h1>

<p>{{$article->body}}</p>	
	</div>
</div>


@stop