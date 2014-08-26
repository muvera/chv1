@extends('layouts.master')
@section('content')

<h1>Edit Profile</h1>

{{ Form::model($user->profile, ['method'=>'PATCH', 'route'=>['profile.update', $user->username]]) }}

		<!-- Address1 -->
<div class="form-group">
		{{ Form::label('address1', 'Address:') }}
		{{ Form::text('address1', null, ['class'=>'form-control']) }}
		{{ errors_for('address1', $errors) }}
</div>

		<!-- Address2 -->
<div class="form-group">
		{{ Form::label('address2', 'Suite / Apt:') }}
		{{ Form::text('address2', null, ['class'=>'form-control']) }}
		{{ errors_for('address2', $errors) }}
</div>

		<!-- city -->
<div class="form-group">
		{{ Form::label('city', 'City:') }}
		{{ Form::text('city', null, ['class'=>'form-control']) }}
		{{ errors_for('city', $errors) }}
</div>

		<!-- zip -->
<div class="form-group">
		{{ Form::label('zip', 'Zipcode:') }}
		{{ Form::text('zip', null, ['class'=>'form-control']) }}
		{{ errors_for('zip', $errors) }}
</div>

		<!-- state -->
<div class="form-group">
		{{ Form::label('state', 'State:') }}
		{{ Form::text('state', null, ['class'=>'form-control']) }}
		{{ errors_for('state', $errors) }}
</div>


<!-- Update Profile Field -->

<div class="form-group">
		{{ Form::submit('Update Profile', ['class'=>'btn btn-primary'])}}
</div>


{{ Form::close() }}


@stop