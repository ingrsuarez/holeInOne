<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <!-- Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300&family=Dosis&display=swap" rel="stylesheet">
        <!-- Styles -->

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         {{-- <meta http-equiv="refresh" content="30"> --}}
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>HIODEV</title>

        <!-- Scripts -->
         
        <script src="{{ asset('public/js/app.js') }}"></script>
        <!-- Fonts -->
        <link rel="icon" href="{{ URL::asset('public/favicon.ico') }}" type="image/x-icon"/>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <script src="https://kit.fontawesome.com/38a763211a.js" crossorigin="anonymous"></script>

    <!-- Styles -->
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <div class="container-fluid">
                   <a class="navbar-brand" href="#"> 
                   <img src="public/images/logo-1.png" class="img-fluid" width="100" height="94"> 
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                    @auth
                        <a href="{{ url('/home') }}" class="navbar-brand position-relative end-0">Home</a>
                    @else
                        <div class="text-center m-2">
                        <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                        </div>
                    @endauth
                  </div>
                </div>
            </nav>
        </header>

    <main>

        <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="max-height: 30rem;">
                
                <img src="public/images/image-13.jpeg" class="img-fluid rounded mx-auto d-block" alt="" width="100%">

                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>DATA ANALTYICS</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Sign up today</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 30rem;">
                <img src="public/images/image-7.jpeg" class="img-fluid opacity-75 bg-dark" alt="" width="100%" height="80%">
                <div class="container">
                  <div class="carousel-caption text-dark text-start">
                    <h1 class="">Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Learn more</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 30rem;">
                <img src="public/images/work-1.jpeg" class="img-fluid" alt="" width="100%" height="80%">
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 30rem;">
                <img src="public/images/image-15.jpeg" class="img-fluid" alt="" width="100%" height="80%">
                <div class="container">
                  <div class="carousel-caption text-start">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 30rem;">
                <img src="public/images/fondo2.jpg" class="img-fluid" alt="" width="100%" height="80%">
                <div class="container">
                  <div class="carousel-caption text-end">
                    <h1>ENERGY</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
              <div class="carousel-item" style="max-height: 30rem;">
                <img src="public/images/fondo1.jpg" class="img-fluid" alt="" width="100%" height="80%">
                <div class="container">
                  <div class="carousel-caption">
                    <h1>ENERGY</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary text-white" href="#">Browse gallery</a></p>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
              <strong><span class="carousel-control-prev-icon" aria-hidden="true"></span></strong>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>


          <!-- Marketing messaging and featurettes
          ================================================== -->
          <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing mt-4">

            <!-- Three columns of text below the carousel -->
            <div class="row">
              <div class="card card bg-white mx-4" style="width: 18rem;">
                  <img src="public/images/fondo1.jpg" class="card-img mt-2" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              <div class="card card bg-white mx-4" style="width: 18rem;">
                  <img src="public/images/image-8.jpeg" class="card-img mt-2" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                  </div>
                </div>
              <div class="card bg-white mx-4" style="width: 18rem;">
                  <img src="public/images/image-6.jpeg" class="card-img mt-2" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                  </div>
                </div>
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette rounded bg-white">
              <div class="col-md-7 my-4">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
              </div>
              <div class="col-md-5  my-4">
                <img src="public/images/image-13.jpeg" class="img-fluid" alt="" width="100%">
                

              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
              </div>
              <div class="col-md-5 order-md-1">
                <img src="public/images/image-14.jpeg" class="img-fluid" alt="" width="100%">

              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
              </div>
              <div class="col-md-5">
                 <img src="public/images/image-5.jpeg" class="img-fluid" alt="" width="100%">


              </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


      <!-- FOOTER -->
        <footer class="container">
            <img src="public/images/logo-1.png" class="img-fluid" width="100" height="94">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; Hole in One Software Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </main>


    {{-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}



    </body>
</html>
