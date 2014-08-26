
{{Form::open(['route'=>'process', 'files'=> true])}}
		<!-- Thumbnail -->
<div class="form-group">
		{{ Form::label('image', 'Image:') }}
		{{ Form::file('image') }}
		{{ Form::hidden('border_id', $border->id)}}
		{{ Form::hidden('border_file', $border->file)}}
		{{ Form::hidden('size_id', $border->size_id)}}
		{{ Form::hidden('cat_id', $border->cat_id)}}
		
</div>

<button class="btn btn-primary" type="submit">Submit</button>
{{Form::close()}}