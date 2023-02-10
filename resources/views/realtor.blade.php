<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Realtor</title>
        <link rel="stylesheet" href="dist/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="homepage.css"> 
        <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
        <!--php-->
        <link rel="stylesheet" href="{{ asset('css/custom/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom/homepage.css') }}">
        <!--customised-->
    </head>
    <body>           
        <header class="p-2 bg-c-098">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                        
                    <!--brandname-->
                    <span>
                    <img src="{{ asset('images/logo.jpg') }}" class="img-logo"> 
                    </span>
                    <!--toggle design-->
                    <a href="#" class="toggle-button">
                    <span class="bar"></span> 
                    <span class="bar"></span>
                    <span class="bar"></span>

                    <ul class="nav-med-254 nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li class="hov-001"><a href="#" class="nav-link ltr-spacing text-sec">Realtor</a></li>
                    <li class="hov-001"><a href="#" class="nav-link ltr-spacing text-white">Contact Us</a></li>
                    
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                            @else
                            <li class="hov-001"><a href="{{ route('login') }}" class="nav-link ltr-spacing text-white">Login</a></li>

                            @if (Route::has('register'))
                            <li class="hov-001"><a href="{{ route('register') }}" class="nav-link ltr-spacing text-white">Register</a></li>
                            @endif
                        @endauth
                    @endif
                    </ul>                               
                </div>
            </div>
        </header>
        <div class="text-bg-dark">
            <div class="">
                <img src="{{ asset('images/content/realstate.jpg') }}" class="log-img">
            </div>
        </div>
        <main>
            <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Bear innumerable variability</h1>
                <p class="lead text-muted">Flip yourself over our listed properties, visualize youself immerse in the photos, find what makes you feel, and call it your home</p>
                    <a href="readarticle.html" class="btn btn-secondary my-2">Read Article</a>
                </p>
                </div>
            </div>
            </section>
            
            <div class="album py-5 bg-light">
                    
                <div class="container">         
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="#"><img src="{{ asset('images/content/stock-1.jpg') }}" width="70%" height="300" class="log-img"></a>
                                <!--<div class="card-body">
                                    <h4 id="te-xt-align">Island Hopping</h4>                                   
                                </div>-->
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="#"><img src="{{ asset('images/content/stock-4.jpg') }}" width="70%" height="300" class="log-img"></a>
                                <!--<div class="card-body">
                                    <h4 id="te-xt-align">Beach</h4>                                   
                                </div>-->
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm">
                                <a href="#"><img src="{{ asset('images/content/stock-2.jpg') }}" width="70%" height="300" class="log-img"></a>
                                <!--<div class="card-body">
                                    <h4 id="te-xt-align">Falls</h4>                                   
                                </div>-->
                             </div>
                        </div>                                                     
                    </div>    
                </div>
                <br><br><br><br>
            </div>                 
            <div class="row featurette py-5">
                <div class="col-md-3"></div>
                    <div class="col-md-3">
                    <h2 class="featurette-heading fw-normal lh-1"><!--Discover Coron--><span class="text-muted aln-00006">RealtState Realtor</span></h2>
                    <p class="lead">Live in the beauty of lush greeneries, from your home’s lawn and garden, to tree-lined streets and even community spaces teeming with flora. Becoming a part of a thriving neighborhood that enjoys the safety and signature service.</p>
                    <!--<p>
                        <a href="readmore.html" class="btn btn-secondary my-2">Read more</a>
                    </p>-->
                    </div>
                    <div class="col-md-3">
                    <!--<svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->
                    <img src="{{ asset('images/content/stock-3.jpg') }}" width="70%" height="600" class="img-coron">
                </div>       
                <div class="col-md-3"></div>
      </div>   
      </main> 
      <div class="px-4 py-5 my-5 text-center">
        <!--<img class="d-block mx-auto mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">ORCHID CARE</h1>-->
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Let’s find the right home option for you.</p>
        </div>
      </div>    
      
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>

    </body>
    <div class="bg-0008">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
              <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
            </a>
            <span class="mb-3 mb-md-0">&copy; RealTor</span>
          </div>
      
          <ul class="rig-pad nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-muted" href="https://www.facebook.com/"><img class="soc" src="{{ asset('images/socials/fb.png') }}"></li>
            <li class="ms-3"><a class="text-muted" href="https://www.linkedin.com/"><img class="soc" src="{{ asset('images/socials/linkedin.png') }}"></a></li>
            <li class="ms-3"><a class="text-muted" href="https://twitter.com/"><img class="soc" src="{{ asset('images/socials/twit.png') }}"></a></li>
            <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/"><img class="soc" src="{{ asset('images/socials/insta.png') }}"></a></li>
          </ul>
        </footer>
      </div>
</html>
