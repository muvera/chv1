@extends('layouts.master')
@section('content')
@if(Session::get('cart'))

<h1>Cart</h1>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Product Id</th>
          <th>Image</th>
          <th>Name</th>
          <th>Sheets</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>

			@foreach($cart as $key => $value)
      	<tr>
		<td>{{$value['border_id']}}</td>
      	<td><img src="/uploads/{{$value['process']}}" class="img-responsive thumbnail" width="100px"></td>
		<td>{{$value['process']}}</td>
				<?php
				// get the price
				$size = Size::where('id', '=', $value['size_id'])->first();
				// Sum Qty array values from the cart.
				$total = $sum += $value['qty'];
				?>
		<td>

			<h5>Qty: {{$value['qty']}}</h5>
			@include('include.add_delete_items')

		</td>


		<td>
			${{$size->base_price * $value['qty']}}
		</td>
		

		</tr>
			@endforeach
        
       
      </tbody>
    </table>
	<div class="row">
	<div class="col-md-2">
		<h2>Back</h2>
		<a href="/categories" class="btn btn-default  btn-sm btn-block">Continue Shopping </a>

	</div>
	<div class="col-md-2">
		
	</div>
	<div class="col-md-5">
		<h2>Flat Rate Shiping</h2>
		@include('include.shipping')
	</div>

	<div class="col-md-3">


		<h2>Total</h2>
		<strong>Items:</strong> {{$total}}<br>
		<strong>Subtotal:</strong> ${{$total * $size->base_price}}<br>
		<strong>Shipping:</strong> ${{$shipping->user_cost}}<br>
		@include('include.total')
	</div>

</div>
<hr>







<div class="row">
	<div class="col-md-10"><a href="/deletecart" class="btn btn-default btn-sm ">Delete Cart</a></div>
	<div class="col-md-2"></div>
</div>


@else
<center>
<h2>You have no items in your cart.</h2>
</center>
@endif
@stop