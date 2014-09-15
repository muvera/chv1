@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">

<div class="row">
 <a href="/adminorderindex" class="btn btn-default btn-sm hidden-print" type="button">All Orders</a>
<a href="/orders" class="btn btn-default btn-sm hidden-print" type="button" value="Print this page" onClick="window.print()">Print Receipt</a>
	


<table class="table ">
 <tr>
   <td>
<address >
<h3>Cake Hollywood, Inc.</h3>

  5507 Santa Monica Blvb, Suite 205<br>
  Hollywood, CA 90038<br>
  <abbr title="Phone">P:</abbr> (818) 310-3652
</address>
   </td>
   <td>

<h3>Customer Receipt</h3>
Date: {{$order->created_at}}<br>
Order #:         {{$order->id}}</br>
Cutomer #: {{$order->user_id}}<br>
Status: {{$order->status->first()->name}}</br>      

   </td>
 </tr>
 <tr>
     <td>
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
     </td>
   <td>
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

   </td> 
 </tr>

</table>












</div>


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
          <tr>
            <td>{{$value['border_id']}}</td>
            <td><img src="/uploads/{{$value['user_dir']}}/{{$value['process']}}" class="thumbnail" width="100" onclick="newWindow = window.open('/uploads/{{$value['user_dir']}}/{{$value['process']}}'); newWindow.print();"></td>
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