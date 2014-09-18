@extends('layouts.master')
@section('title', strip_tags($title))
@section('meta_description', strip_tags($meta_description))

@section('content')
<h1>So, you want to have a scary movie cake?</h1>

<div class="row">
	<div class="col-md-6">
		<h2>Halloween movie cake video</h2>
	</div>
	<div class="col-md-2">
		<h2>Step 1</h2>
<p>Get a portrait photo from your subject(person)</p>
<img src="{{asset('/assets/images/male-sample.jpg')}}" alt="Male Portrait Sample Image" class="thumbnail img-responsive">
	</div>
		<div class="col-md-2">
		<h2>Step 2</h2>
<p>Upoad the image, max upload is 10MB</p>
<img src="{{asset('/assets/images/sample-box.jpg')}}" alt="Male Portrait Sample Image" class="thumbnail img-responsive">
<br><br>
<button type="button" class="btn btn-large btn-primary">Upload</button>
	</div>
		<div class="col-md-2">
	<h2>Step 3</h2>
<p>Use the controllers to Zoom in or Zoom out</p>
<img src="{{asset('/assets/images/male-sample-border.jpg')}}" alt="Male Portrait Mask Zombie Corp" class="thumbnail img-responsive">	
	</div>
</div>


<h3>Overview</h3>
<p> First you need a subject photo with a clear head shoot, after you upload the image alight the subject eyes to the mask eyes using the controllers on the right. Zoom in, Zoom out, Up, Down or Left Right. </p>








@stop