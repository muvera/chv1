@if( file_exists(Paths::image()) )
<!-- SHOW SAMPLE -->

<img src="{{asset('/uploads/'. ImagePaths::image())}}" class="img-responsive thumbnail">
@include('include.controls')
@include('include.uploadform')


@else

<!-- Show Product Place Holder -->

<img src="/images/upload_image.jpg" class="img-responsive thumbnail" alt="upload image place holder">

@include('include.uploadform')


@endif