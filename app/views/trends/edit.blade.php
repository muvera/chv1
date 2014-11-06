@extends('layouts.master')
@section('content')

<h1>Edit Trend</h1>



<div class="row">
	<div class="col-md-4">
	<img src="{{asset('trends/'. $trend->img)}}" class="thumbnail img-responsive">	
	</div>
	<div class="col-md-7">
	<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')

		
		{{Form::model($trend,['method'=>'PATCH', 'route'=>['trends.update', $trend->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('body', 'Body:') }}
		{{ Form::textarea('body', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}
    @endif
@endif



	</div>

</div>



@stop