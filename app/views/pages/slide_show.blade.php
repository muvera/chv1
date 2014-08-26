<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
    <div class="item active">
      <img src="{{asset('/assets/slides/slide1.jpg')}}" alt="Super Hero Cake">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="{{asset('/assets/slides/slide2.jpg')}}" alt="">
      <div class="carousel-caption">
      </div>
    </div>

      <div class="item">
      <img src="{{asset('/assets/slides/slide3.jpg')}}" alt="">
      <div class="carousel-caption">
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>