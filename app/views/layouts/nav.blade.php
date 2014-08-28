<?php
// QUERY THE CATEGORIES
$categories = Category::where('active', '=', 1)->get();


?>

    <div class="navbar navbar-inverse " role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img src="{{asset('assets/logo.png')}}" alt="CakeHollywood"></a>
        </div>
        <div class="collapse navbar-collapse">


     <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="categories/" class="dropdown-toggle" data-toggle="dropdown">Photo Cake<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<li><a href="/categories/1">Rectangle Cake</a></li>
<li><a href="/categories/2">Round Cake</a></li>
<li><a href="/categories/3">Cupcake & Cookie Cicles</a></li>

          </ul>
        </li>


<li class="dropdown">
          <a href="categories/" class="dropdown-toggle" data-toggle="dropdown">Rectangles<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
@foreach($categories as $category)
<li><a href="/categories/{{$category->id}}">{{$category->name}}</a></li>
@endforeach

          </ul>
        </li>


        <li class="dropdown">
          <a href="categories/" class="dropdown-toggle" data-toggle="dropdown">Round<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

<li><a href="/categories/">Birthday</a></li>


          </ul>
        </li>


<li class="dropdown">
          <a href="categories/" class="dropdown-toggle" data-toggle="dropdown">3D<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<li><a href="categories/">Tequila Botles</a></li>
<li><a href="categories/">Whisky Bottles</a></li>
<li><a href="categories/">Wine Bottles</a></li>
<li><a href="categories/">Vodka Bottles</a></li>
<li><a href="categories/">Beer Bottles</a></li>
<li><a href="categories/">Bags & Purses</a></li>

          </ul>
        </li>


      </ul>









  <ul class="nav navbar-nav pull-right">
            @if(Auth::guest())
            <li><a href="/register">Register</a></li>
            <li><a href="/login">Login</a></li>
            @else
              <li>{{ link_to('/'.Auth::user()->username, 'Profile')}}</li>
              <li><a href="/logout">Logout</a></li>
            @endif
            </ul>
          <!-- CART STARTS -->

@if(Session::get('cart'))
<?php

  $items = Session::get('cart');
  $count = count($items); 

?>

          <ul class="nav navbar-nav pull-right">
            <li><a href="/cart"><span class="glyphicon glyphicon-shopping-cart"> {{$count}} </span> Designs </a></li>
          
          </ul>   
@endif


          <!-- CART Ends -->
        </div><!--/.nav-collapse -->
      </div>
    </div>