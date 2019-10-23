<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/contact.css">





    <title>Contact Me</title>
  </head>
  <body>
   <!-- navbar -->

   @include('partials.header2')


        <!-- end of navbar -->

                <div class="contact">
                    <h4 class="display-4">Contact me</h4>

                </div>


                <div class="container">

                    <div class="row">
                        <div class="col">



                            <form id="contact-form" class="form" action="#" method="POST" role="form">
                                <div class="form-group">
                                    <label class="form-label" for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your name" tabindex="1" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="message">Message</label>
                                    <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message..." tabindex="4" required></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-start-order">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d139179.58565983232!2d23.989080509831933!3d56.971396196313165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfb0e5073ded%3A0x400cfcd68f2fe30!2zUsSrZ2E!5e0!3m2!1slv!2slv!4v1571702255230!5m2!1slv!2slv" width="1519,2" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        <!-- </div><style>.mapouter{position:relative;text-align:right;height:490px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:490px;width:1080px;}</style>-->
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
    <script src="contact.js"></script>
  </body>
</html>
