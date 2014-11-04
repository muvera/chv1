
<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html lang="en">
  <head>
    <title>
@yield('title')
</title>
<meta name="description" content="@yield('meta_description')">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
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


<div itemprop="brand" itemscope itemtype="http://schema.org/Brand" itemref="_logo7"  class="hidden-print">
<center> 
  <br>
  <a href="/about">About Us</a> |
  <a href="/contact">Contact Us</a> |
  <a href="/policy">Policy</a> 
  <br>
  <a href="mailto:sales@gogocakes.com?Subject=Hello%20again" target="_top">sales@gogocakes.com </a> 

<span itemprop="name">Cake Hollywood</span> &copy; 2014 | 5007 Santa Monica Blvd Hollywood Ca, 90038 
<br>
<img src="/images/ediblesoft-icon.png" alt="Edible Soft Logo"> <a href="/ediblesoft">Powered by EdibleSoft &reg; 1.0</a>
<br>
</center>
</div></span>

<!-- JavaScript And BootStrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
@yield('footer')
  </body>
</html>
