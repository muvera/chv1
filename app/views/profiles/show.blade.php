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
  <h1>Orders</h1>
</div>
<div class="col-md-6">
 <h1>Shipping Address:</h1>

<address>
  @if($user->address->company==true)
  <strong>{{$user->address->company}}</strong><br>
  @endif
  <strong>{{$user->address->name}} {{$user->address->last}} </strong><br>
  {{$user->address->address}}<br>
  {{$user->address->apt}}<br>
  {{$user->address->city}}, C{{$user->address->state}} {{$user->address->zip}}<br>
  <abbr title="Phone">P:</abbr> (123) 456-7890
</address>

<address>
  <strong>Contact email</strong><br>
  <a href="mailto:{{$user->email}}">{{$user->email}}</a>
</address>



@if ($user->isCurrent())

<a href="{{route('addresses.edit', $user->username)}}" class="btn btn-primary btn-lg" type="button">Edit Address</a>
@endif
  </div>
</div>

@endif 

</div>




@endif


@stop