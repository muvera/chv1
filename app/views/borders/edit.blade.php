@extends('layouts.master')
@section('content')

<h1>Edit Border</h1>

{{Form::model($border,['method'=>'PATCH', 'route'=>['borders.update', $border->id]])}}
		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>

<!-- description -->
<div class="form-group">
		{{ Form::label('file', 'File:') }}
		{{ Form::text('file', null, ['class'=>'form-control']) }}
</div>
	
{{Form::submit()}}
{{Form::close()}}

@stop