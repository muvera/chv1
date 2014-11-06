@extends('layouts.master')
@section('title', strip_tags($trend->title))
@section('meta_description', Str::limit($trend->body, 40))
@section('content')




<div class="row">
	<div class="col-md-5">
<h1>{{$trend->title}}</h1>
<img src="{{asset('trends/'. $trend->img)}}" alt="{{$trend->img}}" class="thumbnail img-responsive">
<p>{{$trend->body}}</p>
<p><strong>Tags, Icons & Items </strong> <br>{{$trend->icons}}</p>
<hr>
<small><p>This data is avaliable to serve as a guide for pop culture and current trends. Information on this pages does not guarantee sales for companies, individuals or target customers. Use information at your own risk. Metric data is probided by PopMetrics</p></small>
		</div>
	<div class="col-md-7">
				<div class="well">
			<h3>Custom Product Metrics Data</h3>
			<div class="row">
				<center>
<iframe width="560" height="315" src="{{$trend->youtube_video}}" frameborder="0" allowfullscreen></iframe>
				</center>
				<div class="col-md-3"> <strong>Youtube Views</strong> <br>{{$trend->youtube_views}}</div>
				<div class="col-md-3"><strong>Shazam Position</strong> <br>{{$trend->shazam_position}}</div>
				<div class="col-md-3"><strong>Explicit Score</strong><br>{{$trend->explicity_score}}</div>
				<div class="col-md-1"><strong>Age</strong> <br>{{$trend->age}}</div>
				<div class="col-md-1"><strong>Gender</strong> <br>{{$trend->gender}}</div>
			</div>
		</div>
		</div>
</div>




@stop