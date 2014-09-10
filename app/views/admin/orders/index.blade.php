@extends('layouts.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">


<h3>All Orders</h3>
<table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>Bill To</th>
          <th>Ship To</th>
          <th>Amount</th>
          <th>Shipping</th>
          <th>Status</th>
         
          <th>Order</th>
        </tr>
      </thead>
      <tbody>
   @foreach($orders as $order)   	
        <tr>
          <td>{{$order->id}}</td>
          <td>{{$order->bill_to}}</td>
          <td>{{$order->ship_to}}</td>
          <td>{{$order->amount}}</td>
          <td>
          <?php
          $shipping = Shipping::where('id', '=', $order->method)->first();
          ?>
          <img src="/assets/images/{{$shipping->file}}" alt="{{$shipping->name}}">
          {{$shipping->name}}
          </td>
          
          <td>
            {{Form::open(['route'=>'status'])}}
            {{Form::hidden('id', $order->id)}}
            {{Form::hidden('status_id', $order->status->first()->id)}}
                <!-- status -->
            <div class="form-group">
            <select name="new_status">
              <option value="0">{{$order->status->first()->name}}</option>
              <option value="1">processing</option>
              <option value="2">completed</option>
              <option value="3">refunded</option>
              <option value="4">lost</option>
              <option value="5">cancelled</option>
            </select>
            </div>
            <img src="/assets/images/{{$order->status->first()->file}}">
            <button class="btn btn-default btn-sm">Update</button>
            {{Form::close()}}

          </td>
        
         
          <td><a href="{{route('adminordershow', $order->id)}}" type="button" class="btn btn-default" > View</a></td>
        </tr>
@endforeach

      </tbody>
    </table>







  </div>
</div>




@stop