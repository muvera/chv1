


<div class="row">

	<div class="col-md-6">

		@include('include.size_options')
		Related Designs
	</div>

	<div class="col-md-4">

			@if(file_exists(Paths::mini()))
<img src="{{asset('uploads/'. ImagePaths::mini() )}}" alt="uploaded thumb" class="img-responsive thumbnail">
@else
<img src="/images/upload_image.jpg" class="img-responsive thumbnail">
@endif
{{Form::open(['route'=>'process', 'files'=> true])}}
		{{ Form::file('image')}}
		{{ Form::hidden('border_id', $border->id)}}
		{{ Form::hidden('border_file', $border->file)}}
		{{ Form::hidden('size_id', $border->size_id)}}
		{{ Form::hidden('cat_id', $border->cat_id)}}
		{{ Form::submit('Submit')}}
{{Form::close()}}		
		
	</div>

</div>


