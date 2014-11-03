@extends('layouts.master')
@section('title', strip_tags($title))
@section('meta_description', strip_tags($meta_description))

@section('content')
<div class="row">
	<div class="col-md-12">
<center>
<img src="{{ asset('assets/images/november.jpg')}}" alt="Main Image" class="thumbnail img-responsive">
</center>
</div>
</div>
@include('pages.pillar_products')
<hr>


@stop