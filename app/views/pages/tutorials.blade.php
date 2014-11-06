<?php
$tutorials = Tutorial::take(5)->get();
?>


@foreach($tutorials as $tutorial)
<div class="row">
	<div class="col-md-6">
	<img src="{{asset('tutorials/'. $tutorial->img)}}" alt="$tutorial->img" class="thumbnail img-responsive">	
	</div>

	<div class="col-md-6">
	<h5><a href="{{route('tutorials.show', $tutorial->id)}}">{{$tutorial->title}}</a> </h5>
	<p> {{Str::limit($tutorial->body, 40)}} <a href="{{route('tutorials.show', $tutorial->id)}}">Read more</a></p>

	</div>
</div>


	
<hr>
@endforeach


