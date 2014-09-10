@extends('layouts.master')
@section('content')
<div class="row">
	<h1>Admin Dashboard</h1>
	<div class="col-md-6">
						<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">{{count($orders)}} New Orders</h3>
				  </div>
				  <div class="panel-body">
				<table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>Bill To</th>
				          <th>Ship To</th>
				          <th>Amount</th>
				          <th>Method</th>
				          <th>Status</th>
				          <th>Action</th>
				        </tr>
				      </thead>
				      <tbody>
				   @foreach($orders as $order)   	
				        <tr>
				          <td>{{$order->id}}</td>
				          <td>{{$order->bill_to}}</td>
				          <td>{{$order->ship_to}}</td>
				          <td>{{$order->amount}}</td>
				          <td>
			<?php
          $shipping = Shipping::where('id', '=', $order->method)->first();
          ?>
          <img src="/assets/images/{{$shipping->file}}" alt="{{$shipping->name}}">
          {{$shipping->name}}

				          </td>
				          <td>{{$order->status->first()->name}}
								<img src="/assets/images/{{$order->status->first()->file}}">
				          </td>

				          <td><a href="{{route('adminordershow', $order->id)}}" type="button" class="btn btn-default" > View</a></td>
				        </tr>
				@endforeach
					
				      </tbody>
				    </table>	
<a class="btn btn-default" href="{{route('adminorderindex')}}">View All Orders</a>
				  </div>
				</div>



						<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">{{count($users)}} User</h3>
				  </div>
				  <div class="panel-body">
				<table class="table table-hover">
				      <thead>
				        <tr>
				          <th>#</th>
				          <th>Username</th>
				          <th>Email</th>
				          <th>Role</th>
				          <th>Change</th>
				          <th>Action</th>

				        </tr>
				      </thead>
				      <tbody>
				   @foreach($users as $user)   	
				        <tr>
				          <td>{{$user->id}}</td>
				          <td>{{$user->username}}</td>
				          <td>{{$user->email}}</td>
				          <td>{{$user->roles->first()->name}}</td>
				          <td>
				          	{{Form::open(['route'=>'changeRole'])}}
				          {{Form::hidden('userid', $user->id)}}
				          {{Form::hidden('userrole', $user->roles->first()->id)}}
				          			<!-- roles -->
				          	<div class="form-group">
				          	<select name="newrole">
				          	  <option value="1">User</option>
				          	  <option value="2">Member</option>
				          	  <option value="3">Admin</option>
				          	  <option value="4">Owner</option>
				          	</select>
				          	</div>
				          	
				          </td>
				          <td>
				          	<button class="btn btn-default btn-xs">Change</button>
				          	{{Form::close()}}
				          </td>
				        </tr>
				@endforeach

				      </tbody>
				    </table>

				  </div>
				</div>
		
	</div>

	<div class="col-md-6">
		<div class="panel panel-default">
  		<div class="panel-heading">
   		 <h3 class="panel-title">Catalog</h3>
  		</div>
  		<div class="panel-body">
    	<h5>Categories</h5>
<table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Shape Id</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
@foreach($categories as $category)
        <tr>
          <td>{{$category->id}}</td>
          <td><a href="{{route('categories.show', $category->id)}}">{{$category->name}}</a></td>
          <td>{{$category->shape_id}}</td>
          <td>
{{Form::open(['method'=>'DELETE', 'route'=>['categories.destroy', $category->id]])}}
	{{Form::hidden('id', $category->id)}}
	<a href="{{route('categories.edit', $category->id)}}" class="btn btn-default">Edit</a>
	<button class="btn btn-default" type="button">Delete</button>
	{{Form::close()}}	
          </td>
        </tr>
    
     
	
@endforeach

      </tbody>
    </table>
	

	</div>


<a href="{{route('categories.create')}}" class="">New</a>



    	<!-- Categories End -->
  		</div>
		</div>
	</div>
</div>




@stop