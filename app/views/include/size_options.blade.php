<!-- Shape Size Options -->
<?php
$cat_id = $border->cat_id;
$related_size = Border::where('cat_id', '=', $cat_id)->get();
?>




<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner" role="listbox">
@foreach($related_size as $related)
		@if($border->id == $related->id)
        <div class="item active">

        	<a itemprop="url" href="{{route('borders.show', $related->id)}}">
   <img src="{{asset('/images/category/'. $cat_id . '/'. $border->img)}}" width="400px">
   			</a>
    	</div>
		@else

        <div class="item">
        	<a href="{{route('border.show', $related->id)}}">
	<img src="{{asset('/images/category/'. $cat_id . '/'. $related->img)}}" width="400px">
			</a>
		</div>
		@endif

@endforeach

      </div>
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>