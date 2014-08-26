<h1>Billing Address </h1>

{{ Form::open(['method'=>'POST', 'route'=>['addresses.store', $user->username]]) }}

		<!-- Company -->
<div class="form-group">
		{{ Form::label('company', 'Company:') }}
		{{ Form::text('company', null, ['class'=>'form-control']) }}
</div>
		<!-- Name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>
		<!-- Last -->
<div class="form-group">
		{{ Form::label('last', 'Last:') }}
		{{ Form::text('last', null, ['class'=>'form-control']) }}
</div>
		<!-- Address -->
<div class="form-group">
		{{ Form::label('address', 'Address:') }}
		{{ Form::text('address', null, ['class'=>'form-control']) }}
</div>

		<!-- Address -->
<div class="form-group">
		{{ Form::label('apt', 'Apt / #:') }}
		{{ Form::text('apt', null, ['class'=>'form-control']) }}
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

		<!-- country -->
<div class="form-group">
		{{ Form::label('country', 'Country:') }}
		{{ Form::text('country', null, ['class'=>'form-control']) }}
</div>

<!-- Add Address Field -->

<div class="form-group">
		{{ Form::submit('Save Address', ['class'=>'btn btn-primary btn-lg pull-right'])}}
</div>


{{ Form::close() }}		