

@if(Session::get('process'))
<!-- Show cake sample -->

<div class="thumbnail">
	<center>
		<small>Product Sample / cake not included</small>
	
	<br>
<img src="{{asset('/uploads/'. ImagePaths::cakeSample())}}" class="img-responsive">
	</center>
</div>


<div class="col-md-4">
<h4>Price: ${{$price->base_price}}</h4>
</div>
<div class="col-md-8">
<a href="{{route('addtocart', ['id'=>$border->id, 'path'=>MariosCart::make()])}}" class="btn btn-success btn-lg btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>

</div>







@include('borders.details')
	


@else

<!-- Show only product -->

<div class="thumbnail">
	<center>
	<strong>Product Sample</strong>
	<br>
	<img src="{{asset('/images/category/'. $border->cat_id . '/' .$border->img)}}" alt="{{$border->img}}" width="300">
	<br>
<small>
Upload an image to view a real time sample
</small>
	</center>
</div>
<h4>Price: ${{$price->base_price}}</h4>
<a href="" class="btn btn-default btn-lg btn-block  disabled"><span class="glyphicon glyphicon-shopping-cart"></span> Add to Cart</a>

@include('borders.details')



@endif