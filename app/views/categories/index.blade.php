@extends('layouts.master')
@section('content')
<h1>Show All Categories</h1>



	<div class="row">
@foreach($categories as $category)


  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="{{route('categories.show', $category->id)}}"><img src="{{asset('assets/images/'.$category->file)}}" alt="{{$category->name}}"></a>
      <div class="caption">
        <h3><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></h3>
        <p>Description</p>
        <p>
     <a href="{{route('categories.edit', $category->id)}}">Edit</a>
	{{Form::open(['method'=>'DELETE', 'route'=>['categories.destroy', $category->id]])}}
	{{Form::hidden('id', $category->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}	

        </p>
      </div>
    </div>
  </div>


@endforeach
	</div>


<a href="{{route('categories.create')}}" class="">New</a>
@stop

