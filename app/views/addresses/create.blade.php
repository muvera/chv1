@extends('layouts.master')
@section('content')




<div class="panel panel-default">
  <div class="panel-body">
   
   <div class="row">
   	<div class="col-md-6">@include('addresses.shipping')</div>
   	<div class="col-md-6"><h1>Almost there!</h1><img src="{{asset('assets/images/address.jpg')}}" alt="shipping" class="img-responsive"></div>
   </div>
  </div>
</div>








@stop