

@if($user->address==null)

@else

<h1>Payment <small>${{$total + $shipping->user_cost}}</small></h1>
{{Form::open(['id'=>'billing-form'])}}

<div class="form-row">
<label>
	<span>Card Number:</span>
	<input class="form-control" type="text" data-stripe="number">
</label>
</div>

<div class="form-row">
<label>
	<span>CVC:</span>
	<input class="form-control" type="text" data-stripe="cvc">
</label>
</div>



<div class="form-inline">
	<label>
	<span>Expiration Date:</span><br>

{{Form::selectMonth(null, null, ['data-stripe'=>'exp-month', 'class'=>'form-control'])}}
{{Form::selectYear(null, date('Y'),date('Y')+10, null, ['data-stripe'=>'exp-year',  'class'=>'form-control'])}}
</label>
</div>

<div class="form-row">
		<label>
			
			<input class="form-control" type="hidden" id="email" name="email" value="{{$user->email}}">
		</label>
</div>

{{Form::submit('Buy Now', ['class'=>'btn btn-success btn-lg'])}}

<div class="payment-errors"></div>

{{Form::close()}}
@endif
