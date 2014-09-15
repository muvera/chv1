@extends('layouts.master')
@section('content')
@if($user->profile==null)
<?php
$user = User::whereUsername($user->username)->firstOrfail();
		$profile = new Profile;
		$profile->location = 'Your location';
$user->profile()->save($profile);
?>

@if ($user->isCurrent())


<div class="jumbotron">
  <h1>Hello, {{$user->username}}</h1>
  <p>Welcome to our edible cake imaging system. You need to add a shipping address to at the "Profile".</p>

  <p><a href="/{{ $user->username }}" class="btn btn-default btn-lg btn-block" role="button">Continue</a></p>
</div>


@endif


@else

@if($user->address==null)
<p><a href="{{route('addresses.create', $user->username)}}" class="btn btn-primary btn-lg btn-block" role="button">Shipping Address</a></p>
@else




<div class="panel panel-default">
  <div class="panel-body">


<div class="col-md-6">
   <h1>{{$user->address->name}} {{$user->address->last}}</h1>

   <h4>Shipping Address:</h4>

<address>
  @if($user->address->company==true)
  <strong>{{$user->address->company}}</strong><br>
  @endif
  <strong>{{$user->address->name}} {{$user->address->last}} </strong><br>
  {{$user->address->address}} 
  @if($user->address->apt)
  # {{$user->address->apt}}
  @endif
  <br>
  
  {{$user->address->city}}, {{$user->address->state}} {{$user->address->zip}}<br>
  <abbr title="Phone">P:</abbr> {{$user->address->phone}}
</address>



@if ($user->isCurrent())
<address>
  <strong>Contact email</strong><br>
  <a href="mailto:{{$user->email}}">{{$user->email}}</a>
</address>

  <h4>Orders</h4>
  <a href="/orders" class="btn btn-primary btn-lg btn-block" type="button">Show</a>


<a href="{{route('addresses.edit', $user->username)}}" class="btn btn-primary btn-lg btn-block" type="button">Edit Address</a>
@endif
</div>
<div class="col-md-6">

  </div>
</div>

@endif 

</div>




@endif


@stop