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
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Shapes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<li><a href="/categories/1">Rectangle Shapes</a></li>
<li><a href="/categories/2">Round Shapes</a></li>
<li><a href="/categories/3">Heart Shapes</a></li>
<li><a href="/categories/4">Star Shapes</a></li>
<li><a href="/categories/5">Flower Shapes</a></li>
<li><a href="/categories/6">Dimond Shapes</a></li>
<li><a href="/categories/7">Emblem Shapes</a></li>
<li><a href="/categories/8">Monogram Shapes</a></li>
<li><a href="/categories/9">Oval Shapes</a></li>
<li><a href="/categories/10">Square Shapes</a></li>
<li><a href="/categories/11">Round Square Shapes</a></li>


          </ul>
        </li>





      </ul>

     <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">Borders<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
<li><a href="/categories/12">Birthday</a></li>



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