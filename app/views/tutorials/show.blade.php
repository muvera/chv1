@extends('layouts.master')
@section('title', strip_tags($tutorial->title))
@section('meta_description', Str::limit($tutorial->body, 40))
@section('content')
<div class="row">
	<div class="col-md-5"><img src="{{asset('tutorials/' . $tutorial->img)}}" alt="{{$tutorial->img}}"></div>

	<div class="col-md-7">
		<h1>{{$tutorial->title}}</h1>
		<p>{{$tutorial->body}}</p>
	</div>
</div>



<div class="well">
	<div class="row">
	<div class="col-md-2"><img src="{{asset('assets/images/1.png')}}" alt=""></div>
	<div class="col-md-3">{{$tutorial->st1}}</div>
</div>
</div>
<div class="well">
	<div class="row">
	<div class="col-md-2"><img src="{{asset('assets/images/2.png')}}" alt=""></div>
<div class="col-md-3">{{$tutorial->st2}}</div>
</div>
</div>
<div class="well">
	<div class="row">
	<div class="col-md-2"><img src="{{asset('assets/images/3.png')}}" alt=""></div>
<div class="col-md-3">{{$tutorial->st3}}</div>
		</div>
</div>
<div class="well">
	<div class="row">
	<div class="col-md-2"><img src="{{asset('assets/images/4.png')}}" alt=""></div>
<div class="col-md-3">{{$tutorial->st4}}</div>
</div>
</div>
<div class="well">
	<div class="row">
	<div class="col-md-2"><img src="{{asset('assets/images/5.png')}}" alt=""></div>
<div class="col-md-3">{{$tutorial->st5}}</div>
</div>
</div>

@stop