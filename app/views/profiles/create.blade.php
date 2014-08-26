<h1>Shipping Address</h1>

{{ Form::open(['method'=>'POST', 'route'=>['profile.create', $user->username]]) }}

		<!-- Address -->
<div class="form-group">
		{{ Form::label('address', 'Address:') }}
		{{ Form::text('address1', null, ['class'=>'form-control']) }}
</div>

		<!-- Address -->
<div class="form-group">
		{{ Form::label('address2', 'Apt / #:') }}
		{{ Form::text('address2', null, ['class'=>'form-control']) }}
</div>


		<!-- city -->
<div class="form-group">
		{{ Form::label('city', 'City:') }}
		{{ Form::text('city', null, ['class'=>'form-control']) }}
</div>

		<!-- Zip -->
<div class="form-group">
		{{ Form::label('zip', 'Zipcode:') }}
		{{ Form::text('zip', null, ['class'=>'form-control']) }}
</div>

		<!-- state -->
<div class="form-group">
		{{ Form::label('state', 'State:') }}
		{{ Form::text('state', null, ['class'=>'form-control']) }}
</div>

<!-- Add Address Field -->

<div class="form-group">
		{{ Form::submit('Save Address', ['class'=>'btn btn-primary'])}}
</div>


{{ Form::close() }}