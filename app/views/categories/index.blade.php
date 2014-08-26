@extends('layouts.master')
@section('content')
<h1>Show All Categories</h1>

<ul>
@foreach($categories as $category)

<h4><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a> </h4>
	| <a href="{{route('categories.edit', $category->id)}}">Edit</a> </li>
	{{Form::open(['method'=>'DELETE', 'route'=>['categories.destroy', $category->id]])}}
	{{Form::hidden('id', $category->id)}}
	{{Form::submit('delete')}}
	{{Form::close()}}

@endforeach


<a href="{{route('categories.create')}}" class="">New</a>
@stop