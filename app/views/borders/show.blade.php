@extends('layouts.master')
@section('content')


<div class="row">
	<div class="col-md-9">
@if(Session::get('border_file')==$border->file)
<!-- get the new file -->
<img src="/uploads/{{Session::get('process')}}" class="img-responsive thumbnail"></div>
@else
<!-- get system file -->
<img src="/borders/{{$border->file}}" class="img-responsive thumbnail"></div>
@endif
<div class="col-md-3">
<h1>{{$border->name}}</h1>

@if(!Session::get('process'))
<p>{{$border->description}}</p>
@include('include.uploadform')
<hr>
<a href="" class="btn btn-default btn-lg btn-block  disabled"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>

@endif



@if(Session::get('border_file')==$border->file)
<hr>
<h4>Edit Image</h4>
@include('include.controls')

<hr>


<a href="{{route('addtocart')}}" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>

@if(Session::has('message'))
<div class="alert-box success">
	<h2>Great! item has been added.</h2>
    <h4><a href="/cart" class="btn btn-default btn-block">{{ Session::get('message') }}</a></h4>
</div>
@endif


@endif

@if(Session::get('process'))
<!-- UPLOADED IMAGE -->


			@if(Session::get('border_file')!==$border->file)
			<img src="/uploads/{{Session::get('thumbnail')}}" class="img-responsive thumbnail">
			<a href="{{route('loadimage', $border->file)}}" class="btn btn-primary ">Load Image</a>
			<a href="{{route('deleteimage', $border->file)}}" class="btn btn-default ">Delete</a>
			@endif

@endif


</div>
</div>



@stop