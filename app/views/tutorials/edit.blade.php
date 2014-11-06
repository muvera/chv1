@extends('layouts.master')
@section('content')

<h1>Edit Tutorial</h1>
<img src="{{asset('tutorials/' . $tutorial->img)}}" alt="{{$tutorial->img}}" class="thumbnail img-responsive">
	<?php
$user = Auth::user();
?>
@if(Auth::user())
    @if($user->roles->first()->name == 'owner')

{{Form::model($tutorial,['method'=>'PATCH', 'route'=>['tutorials.update',$tutorial ->id]])}}
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

		<!-- st1 -->
<div class="form-group">
		{{ Form::label('st1', 'Step1:') }}
		{{ Form::text('st1', null, ['class'=>'form-control']) }}
</div>

		<!-- st2 -->
<div class="form-group">
		{{ Form::label('st2', 'Step2:') }}
		{{ Form::text('st2', null, ['class'=>'form-control']) }}
</div>

		<!-- st3 -->
<div class="form-group">
		{{ Form::label('st3', 'Step 3:') }}
		{{ Form::text('st3', null, ['class'=>'form-control']) }}
</div>

		<!-- st4 -->
<div class="form-group">
		{{ Form::label('st4', 'Step 4:') }}
		{{ Form::text('st4', null, ['class'=>'form-control']) }}
</div>

		<!-- st5 -->
<div class="form-group">
		{{ Form::label('st5', 'Step 5:') }}
		{{ Form::text('st5', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}
    @endif
@endif

@stop