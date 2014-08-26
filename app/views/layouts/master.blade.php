
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>
@yield('title')
    </title>

    <!-- Bootstrap core CSS -->
   <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="/assets/bootstrap-3.2.0-dist/css/bootstrap.min.css">




@yield('meta')

  </head>

  <body>

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
            <li><a href="/categories">Categories</a></li>
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

    <div class="container">

@yield('content')

    </div>


@yield('footer')
<center> Cake Hollywood &copy; 2014 | 5007 Santa Monica Blvd Hollywood Ca, 90038 
  <br>
  Los Angles USA (818) 310-3652 | <a href="mailto:sales@gogocakes.com?Subject=Hello%20again" target="_top">
sales@gogocakes.com </a> </center>

  </body>
</html>
