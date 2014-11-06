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


<div class="row">

	<div class="col-md-4">
		<div class="well">
		<h3>Trending </h3>
@include('pages.trends')
<a href="/analytics">View all Trending</a>
</div>	
	</div>

	<div class="col-md-4">
		<div class="well">
	<h3>Articles</h3>
@include('pages.articles')
<a href="/all_articles">View all Articles</a>
</div>		
	</div>

	<div class="col-md-4">
<div class="well">
 	<h3>Tutorials</h3>
@include('pages.tutorials')	
<a href="/all_tutorials">View all Tutorials</a>	
	</div>
</div>

</div>
<hr>
@include('pages.holidays_2014')

@stop