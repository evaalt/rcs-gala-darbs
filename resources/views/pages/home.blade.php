
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">


    <title>My blog</title>
  </head>
  <body>
   <!-- navbar -->



        @include('partials.header')

        <!-- end of navbar -->

                  <!-- video -->
        <header>
            <div class="overlay"></div>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
              <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
            </video>
            <div class="container h-100">
              <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                  <h1 class="display-3">Welcome to my page</h1>
                  <p class="lead mb-0">My blog</p>
                </div>
              </div>
            </div>
          </header>



        <!-- blog posts -->
<div class="latest">
  <h4 class="display-4">Latest blog posts</h4>
</div>


<div class="card-deck">
            @foreach ($myposts as $item)
            <div class="card">
                <img src="{{ $item->img }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> {{ $item->title }} </h5>
                <p class="card-text">{{ $item->shortbody }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                </div>
            </div>
            @endforeach
</div>


            <div class="more d-flex justify-content-center">
                    <a href="/blog"><button type="button" class="btn btn-outline-primary btn-lg">See More</button></a>
            </div>


            <!-- card carousel -->

    <!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
      <li data-target="#video-carousel-example2" data-slide-to="1"></li>
      <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
      <!-- First slide -->
      <div class="carousel-item active">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-indigo-light"></div>
        </div>

        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Light mask</h3>
            <p>First text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.First slide -->

      <!-- Second slide -->
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/animation-intro.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-purple-slight"></div>
        </div>

        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Super light mask</h3>
            <p>Secondary text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.Second slide -->

      <!-- Third slide -->
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <!--Video source-->
          <video class="video-fluid" autoplay loop muted>
            <source src="https://mdbootstrap.com/img/video/Tropical.mp4" type="video/mp4" />
          </video>
          <div class="mask rgba-black-strong"></div>
        </div>

        <!--Caption-->
        <div class="carousel-caption">
          <div class="animated fadeInDown">
            <h3 class="h3-responsive">Strong mask</h3>
            <p>Third text</p>
          </div>
        </div>
        <!--Caption-->
      </div>
      <!-- /.Third slide -->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--Carousel Wrapper-->

  <!-- Footer -->



@include('partials.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/index.js"></script>
  </body>
</html>

