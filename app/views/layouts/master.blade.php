
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
@include('layouts.nav')

   

<div class="container">
@yield('content')
</div>


@yield('footer')
<center> Cake Hollywood &copy; 2014 | 5007 Santa Monica Blvd Hollywood Ca, 90038 
  <br>
  Los Angles USA (818) 310-3652 | <a href="mailto:sales@gogocakes.com?Subject=Hello%20again" target="_top">
sales@gogocakes.com </a> </center>


<!-- JavaScript And BootStrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body>
</html>
