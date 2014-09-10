@extends('layouts.master')
@section('title', strip_tags($title))
@section('meta_description', strip_tags($meta_description))

@section('content')
@include('pages.categories')
<div class="row">
	<div class="col-md-4">
		<h1>Create your own Cake Image</h1>
<ul><h2>
	<li>Choose a shape</li>
	<li>Upload your Image</li>
	<li>Done!</li>
	</h2>
</ul>
<img src="/assets/images/featured.jpg" alt="Featured in womans magazine">
	</div>
	<div class="col-md-8">
		<img src="/assets/images/cakehollywoodmodel.png" alt="Cake hollywood front page model" class="thumbnail img-responsive">
	</div>

</div>

<p>Edible printing for cakes is now more easy than ever, simply create an account and have your images delivered to your home or business. We use the best US made, edible paper, food coloring and technology to customize your celebration or creative works. 
Give us a try and if you are not satisfied your image is free.</p>


@stop