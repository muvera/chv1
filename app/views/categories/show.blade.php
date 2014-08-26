@extends('layouts.master')
@section('content')
<h1>{{$category->name}}</h1>
<p>{{$category->description}}</p>



<h2>Show All Borders</h2>

<div class="row">







@foreach($borders as $border)
{{Form::open(['method'=>'DELETE', 'route'=>['borders.destroy', $border->id]])}}
{{Form::hidden('id', $border->id)}}
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <a href="{{route('borders.show', $border->id)}}"><img src="/borders/{{$border->file}}" ></a>
      <div class="caption">
        <h3><a href="{{route('borders.show', $border->id)}}">{{$border->name}}</a></h3>
        <p><a href="{{route('borders.edit', $border->id)}}" class="btn btn-default" role="button">Edit</a> <button class="btn btn-default" type="submit">Delte</button> </p>
      </div>
    </div>
  </div>
	{{Form::close()}}

@endforeach


</div>

<a href="{{route('borders.create')}}" class="">New Border</a>
@stop


