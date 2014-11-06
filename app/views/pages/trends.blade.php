<?php
$trends = Trend::take(5)->get();
?>



@foreach($trends as $trend)
<div class="row">
	<div class="col-md-6">
	<img src="{{asset('trends/'. $trend->img)}}" alt="$trend->img" class="thumbnail img-responsive">	
	</div>

	<div class="col-md-6">
		<h5><a href="{{route('trends.show', $trend->id)}}">{{$trend->title}}</a> </h5>
		<p> {{Str::limit($trend->body, 40)}} <a href="{{route('trends.show', $trend->id)}}">Read more</a></p>

	</div>
</div>


	
<hr>
@endforeach


