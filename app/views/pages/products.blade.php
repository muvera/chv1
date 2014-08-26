<div class="row">
<div class="col-md-12">

<div class="panel panel-default">
  <div class="panel-body">



<div class="row">
	  	@foreach($products as $product)
  <div class="col-sm-6 col-md-4">

    <div class="thumbnail">
      <a href="{{route('borders.show', $product->id)}}"><img src="{{asset('/assets/images/'.$product->file)}}"></a>
      <div class="caption">
        <h4>{{$product->name}}</h4>
        
       
        <div class="row">
          <div class="col-md-8">
            <p>{{Str::limit($product->description, 90)}} <a href="{{route('borders.show', $product->id)}}">Read more</a></p>
          </div>
          <div class="col-md-4">
            
            <h5>Was: <del>${{$product->price}}</del></h5>
            <h5>Now: ${{$product->special}}</h5>
            
          <a href="{{route('borders.show', $product->id)}}" class="btn btn-primary" role="button"> View </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  @endforeach
</div>


  </div>
</div>


	</div>
</div>