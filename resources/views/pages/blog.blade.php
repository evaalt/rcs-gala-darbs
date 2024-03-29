<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">



    <title>Blog Posts</title>
  </head>
  <body>
   <!-- navbar -->

   @include('partials.header2')




   <!-- main post -->


   <!-- blog posts -->

<div class="text-center">
<h4 class="display-4 p-5 m-5">All Blog posts</h4>
</div>


<div class="m-5 p-2">
<div class="card-columns">


@foreach ($myposts as $item)
  <div class="card">
    <img src="{{ $item->img }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $item->title }}</h5>
      <p class="card-text">{{ $item->shortbody }}</p>
      <div class="card-footer">
            <small class="text-muted">{{ $item->created_at->diffForHumans() }}</small></div>
    </div>
  </div>
  @endforeach

</div>
</div>



  <!-- Footer -->
  @include('partials.footer')

<!-- Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
