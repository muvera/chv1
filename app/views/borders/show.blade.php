@extends('layouts.master')
@section('title', strip_tags($border->name))
@section('meta_description', strip_tags($border->description))
@section('content')
<span itemscope itemtype="http://schema.org/Product">
		<div class="row">

		<div class="col-md-5">
		<div class="well">
@include('borders.upload')
		</div>

		</div>

		<div class="col-md-5">
			<h3 itemprop="name" >{{$border->name}}</h3>
@include('borders.product')		
		</div>
					</div>

@stop