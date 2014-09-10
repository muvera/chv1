@extends('layouts.master');
@section('content')
<div class="panel panel-default">
  <div class="panel-body">


<h3>{{$user->username}} <small>orders</small></h3>
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Bill To</th>
          <th>Ship To</th>
          <th>Amount</th>
          <th>Method</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
   @foreach($orders as $order)   	
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->bill_to}}</td>
          <td>{{$order->ship_to}}</td>
          <td>{{$order->amount}}</td>
          <td>Priority</td>
          <td>{{$order->status->first()->name}}</td>
          <td><a href="{{route('orders.show', $order->id)}}" type="button" class="btn btn-default" > View</a></td>
        </tr>
@endforeach

      </tbody>
    </table>







  </div>
</div>




@stop