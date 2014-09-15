@extends('layouts.master')
@section('content')




<div class="panel panel-default">
  <div class="panel-body">
   
   <div class="row">
   	<div class="col-md-6">
   <h3>Shipping Address</h3>

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

		<!-- Phone -->
<div class="form-group">
		{{ Form::label('phone', 'Phone:') }}
		{{ Form::text('phone', null, ['class'=>'form-control']) }}
</div>


   	</div>
   	<div class="col-md-6">
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
<select class="form-control" name="state">
<option value="" selected="selected">Select a State</option> 
<option value="AL">Alabama</option> 
<option value="AK">Alaska</option> 
<option value="AZ">Arizona</option> 
<option value="AR">Arkansas</option> 
<option value="CA">California</option> 
<option value="CO">Colorado</option> 
<option value="CT">Connecticut</option> 
<option value="DE">Delaware</option> 
<option value="DC">District Of Columbia</option> 
<option value="FL">Florida</option> 
<option value="GA">Georgia</option> 
<option value="HI">Hawaii</option> 
<option value="ID">Idaho</option> 
<option value="IL">Illinois</option> 
<option value="IN">Indiana</option> 
<option value="IA">Iowa</option> 
<option value="KS">Kansas</option> 
<option value="KY">Kentucky</option> 
<option value="LA">Louisiana</option> 
<option value="ME">Maine</option> 
<option value="MD">Maryland</option> 
<option value="MA">Massachusetts</option> 
<option value="MI">Michigan</option> 
<option value="MN">Minnesota</option> 
<option value="MS">Mississippi</option> 
<option value="MO">Missouri</option> 
<option value="MT">Montana</option> 
<option value="NE">Nebraska</option> 
<option value="NV">Nevada</option> 
<option value="NH">New Hampshire</option> 
<option value="NJ">New Jersey</option> 
<option value="NM">New Mexico</option> 
<option value="NY">New York</option> 
<option value="NC">North Carolina</option> 
<option value="ND">North Dakota</option> 
<option value="OH">Ohio</option> 
<option value="OK">Oklahoma</option> 
<option value="OR">Oregon</option> 
<option value="PA">Pennsylvania</option> 
<option value="RI">Rhode Island</option> 
<option value="SC">South Carolina</option> 
<option value="SD">South Dakota</option> 
<option value="TN">Tennessee</option> 
<option value="TX">Texas</option> 
<option value="UT">Utah</option> 
<option value="VT">Vermont</option> 
<option value="VA">Virginia</option> 
<option value="WA">Washington</option> 
<option value="WV">West Virginia</option> 
<option value="WI">Wisconsin</option> 
<option value="WY">Wyoming</option>
</select>
</div>

		<!-- country -->
<div class="form-group">
		{{ Form::label('country', 'Country:') }}
		<select class="form-control" name="country">
	<option value="USA" selected="selected">United States</option> 
	<option value="CANADA">Canada</option> 
		</select>
		
</div>


<!-- Add Address Field -->

<div class="form-group">
		{{ Form::submit('Save Address', ['class'=>'btn btn-primary btn-lg pull-right'])}}
</div>


{{ Form::close() }}		
	<!-- Second Col -->	
   	</div>
   </div>
  </div>
</div>




@stop