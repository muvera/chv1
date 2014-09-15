
@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">

<div class="row">
	
<div class="col-md-6">
<address>
<h1>Cake Hollywood, Inc.</h1>
 
  5507 Santa Monica Blvb, Suite 205<br>
  Hollywood, CA 90038<br>
  <abbr title="Phone">P:</abbr> (818) 310-3652
</address>
</div>



<div class="col-md-6">

<a href="/orders" class="btn btn-default btn-sm" type="button">All Orders</a>
<a href="/orders" class="btn btn-default btn-sm" type="button" value="Print this page" onClick="window.print()">Print Receipt</a>

<h3>Customer Receipt</h3>
Date: {{$order->created_at}}<br>
Order #:         {{$order->id}}</br>
Cutomer #: {{$order->user_id}}<br>
Status: {{$order->status->first()->name}}</br>	
</div>

</div>




<div class="row">
<div class="col-md-6">
	<strong>Bill To:</strong></br>
	
  {{$order->bill_to}}

  <br>
  {{$order->b_address}}
  {{$order->b_apt}}
  <br>
  {{$order->b_city}}
  {{$order->b_state}} , 
  {{$order->b_zip}}
  <br>
  {{$order->b_country}}

</div>
<div class="col-md-6">
	<strong>Ship To:</strong></br>
	
  {{$order->ship_to}}

  <br>
  {{$order->s_address}}
  {{$order->s_apt}}
  <br>
  {{$order->s_city}}
  {{$order->s_state}} , 
  {{$order->s_zip}}
  <br>
  {{$order->b_country}}

</div>	
</div>





<br>
<br>




<table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>

<?php
$items = unserialize($order->items);
?>



@foreach($items as $key => $value)
<?php

$shape = Size::findOrFail($value['size_id']);

?>

{{$value['process']}}
          <tr>
            <td>{{$value['border_id']}}</td>
            <td><img src="/uploads/{{Session::get('user_dir')}}/{{$value['process']}}" class="thumbnail" width="100"></td>
            <td>{{$shape->name}}</td>
            <td>{{$shape->description}}</td>
            <td>{{$value['qty']}}</td>
            <td>{{$shape->base_price}}</td>
          </tr>

@endforeach

        </tbody>
      </table>
<div class="row">
<div class="col-md-9">

</div>
<div class="col-md-3">
  
   <strong>Items:   </strong>{{count($items)}} </br>
  <strong>Subtotal: </strong> ${{$order->amount}} </br>  
  <strong>Shipping: </strong> ${{$order->shipping}}</br>
  <hr>
  <strong>Total:    {{$order->amount + $order->shipping}}</strong> 

</div>

       
 
</div>


  </div>
</div>


@stop