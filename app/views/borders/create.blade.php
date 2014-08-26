@extends('layouts.master')
@section('content')

<h1>Create New Borders</h1>

{{Form::open(['route'=>'uploads.store', 'files'=> true])}}

		<!-- name -->
<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class'=>'form-control']) }}
</div>

		<!-- Description -->
<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class'=>'form-control']) }}
</div>


		<!-- category -->
<div class="form-group">
{{ Form::label('category', 'Category:') }}
<select name="category">
	@foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->name}}</option>
  	@endforeach
</select>
</div>



		<!-- size -->
<div class="form-group">
{{ Form::label('size', 'Size:') }}
<select name="size">
	@foreach($sizes as $size)
  <option value="{{$size->id}}">Size: {{$size->name}} on a {{$size->description}}</option>
  	@endforeach
</select>
</div>



		<!-- Thumbnail -->
<div class="form-group">
		{{ Form::label('thumbnail', 'Thumbnail:') }}
		{{ Form::file('thumbnail') }}
</div>



{{Form::submit()}}
{{Form::close()}}

@stop

