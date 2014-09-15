@extends('layouts.master')
@section('content')
<h1>Edit Address</h1>
{{ Form::open(['method'=>'UPDATE', 'route'=>['addresses.update', $user->address->id]]) }}

		<!-- Company -->
<div class="form-group">
		{{ Form::label('company', 'Company:') }}
		{{ Form::text('company', $user->address->company, ['class'=>'form-control']) }}
</div>
		<!-- Name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', $user->address->name, ['class'=>'form-control']) }}
</div>
		<!-- Last -->
<div class="form-group">
		{{ Form::label('last', 'Last:') }}
		{{ Form::text('last', $user->address->last, ['class'=>'form-control']) }}
</div>

		<!-- phone -->
<div class="form-group">
		{{ Form::label('phone', 'Phone:') }}
		{{ Form::text('phone', $user->address->phone, ['class'=>'form-control']) }}
</div>
		<!-- Address -->
<div class="form-group">
		{{ Form::label('address', 'Address:') }}
		{{ Form::text('address', $user->address->address, ['class'=>'form-control']) }}
</div>

		<!-- Address -->
<div class="form-group">
		{{ Form::label('apt', 'Apt / #:') }}
		{{ Form::text('apt', $user->address->apt, ['class'=>'form-control']) }}
</div>


		<!-- city -->
<div class="form-group">
		{{ Form::label('city', 'City:') }}
		{{ Form::text('city', $user->address->city, ['class'=>'form-control']) }}
</div>

		<!-- Zip -->
<div class="form-group">
		{{ Form::label('zip', 'Zipcode:') }}
		{{ Form::text('zip', $user->address->zip, ['class'=>'form-control']) }}
</div>

		<!-- state -->
<div class="form-group">
		{{ Form::label('state', 'State:') }}
		{{ Form::text('state', $user->address->state, ['class'=>'form-control']) }}
</div>

		<!-- country -->
<div class="form-group">
		{{ Form::label('country', 'Country:') }}
		{{ Form::text('country', $user->address->country, ['class'=>'form-control']) }}
</div>

<!-- Add Address Field -->

<div class="form-group">
		{{ Form::submit('Save Address', ['class'=>'btn btn-primary btn-lg pull-right'])}}
</div>


{{ Form::close() }}		
	<!-- Second Col -->

@stop()