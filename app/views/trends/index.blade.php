@extends('layouts.master')
@section('title', 'Cake Trends & Analysis')
@section('meta_description', 'Analitics and trends')

@section('content')
<h1>Trend Analitics</h1>


@foreach($trends as $trend)
<div class="row">
	<div class="col-md-5">

<img src="{{asset('trends/' . $trend->img)}}" alt="{{$trend->img}}" class="thumbnail">		
	</div>
		<div class="col-md-7">
		<h2><a href="{{route('trends.show', $trend->id)}}">{{$trend->title}}</a> </h2>

		<p><strong>Description: </strong>{{$trend->body}}</p>
		<p><strong>Youtube: </strong>  <a href="{{$trend->youtube_video}}">View video</a></p>
		<p><strong>Iconic Items</strong> {{$trend->icons}}</p>


		<div class="well">
			<h5>Metrics Data</h5>
			<div class="row">
				<div class="col-md-3">Youtube Views <br>{{$trend->youtube_views}}</div>
				<div class="col-md-3">Shazam Position <br>{{$trend->shazam_position}}</div>
				<div class="col-md-3">Explicity Score <br>{{$trend->explicity_score}}</div>
				<div class="col-md-1">Age <br>{{$trend->age}}</div>
				<div class="col-md-1">Gender <br>{{$trend->gender}}</div>
			</div>
		</div>
	</div>
</div>

<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')



	| <a href="{{route('trends.edit', $trend->id)}}">Edit</a> 
	{{Form::open(['method'=>'DELETE', 'route'=>['trends.destroy', $trend->id]])}}
	{{Form::hidden('id', $trend->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}
    @endif
@endif


	
<hr>
@endforeach

<a href="{{route('trends.create')}}" class="">New</a>
@stop
