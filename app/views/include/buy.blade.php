@extends('layouts.master')
@section('meta')
<meta name="publishable-key", content="{{ Config::get('development/stripe.publishable_key') }}"></meta>
@stop
@section('content')

@if(Auth::user())
<?php
$username = Auth::user()->username;
// pull the model

$user = User::with('profile')->whereUsername($username)->firstOrfail();

dd($user);
?>
@endif




<div class="panel panel-default">
  <div class="panel-body">

<!-- Shipping Address -->
<div class="col-md-6">
<!-- Check if the user is loged -->
@if(!Auth::user())
@include('include.login')
@else


<!-- If the user is loged than pull -->
@include('include.address')

@endif

</div>
<!-- Shipping Ends -->

<!-- Shipping Address -->
<div class="col-md-6">

@if(!Auth::user())
@include('registration.registration_form')
@else
@include('include.payment_form')
@endif
</div>
<!-- Shipping Address -->

  </div>
</div>


@stop

@section('footer')
 <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
 <script src="https://js.stripe.com/v2/"></script>
 <script src="{{asset('/js/billing.js')}}"></script>
@stop




