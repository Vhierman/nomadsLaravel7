<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Library Bootstrap -->
    <link rel="stylesheet" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <!-- End Library Bootstrap -->
    <!-- Fonts Assistant And Playfair Display-->
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- End Fonts -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <!-- End Custom CSS -->
</head>
<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            
            <!-- Logo -->
            <a href="#" class="navbar-brand">
                <img src="{{url('frontend/images/logo1.png')}}" alt="Logo Nomads">
            </a>
            <!-- End Logo -->
            
            <!-- Toggle -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End Toggle -->
            
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link active">Home</a></li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Paket Travel</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link</a><a href="#" class="dropdown-item">LInk</a><a href="#" class="dropdown-item">Link</a>
                        </div>
                    </li>
                    <li class="nav-item mx-md-2"><a href="#" class="nav-link">Testimonial</a></li>
                </ul>
                <!-- Mobile Button -->
                <form action="#" class="form-inline d-sm-block d-md-none">
                    <button type="button" class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>
                <!-- End Mobile Button -->
                
                <!-- Desktop Button -->
                <form action="#" class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button type="button" class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>
                <!-- End Desktop Button -->
            </div>
            <!-- End Menu -->
            
        </nav>
    </div>
    <!-- End Navbar -->

    
    @yield('content')


        <!-- Section Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br/>
                            before in this worls
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Images Section Popular -->
        <section class="section-popular-content" id="popularcontent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex-column"
                        style="background-image: url('frontend/images/pura.jpg');"
                        >
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">PURA</div>
                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex-column"
                        style="background-image: url('frontend/images/danautoba.jpg');"
                        >
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DANAU TOBA</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex-column"
                        style="background-image: url('frontend/images/wonosobo.jpg');"
                        >
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">WONOSOBO</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex-column"
                        style="background-image: url('frontend/images/rajaampat.jpg');"
                        >
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">RAJA AMPAT</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Popular -->

        <!-- Section Our Network -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us 
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{url('frontend/images/logopartner.png')}}" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Network -->

        <!-- Section Testimonial -->
        <section class="section-testimonial-heading" id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moment were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section Testimonial -->

        <!-- Section They Are Loving Us -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/image_firman.jpg')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Achmad Firmansyah</h3>
                                <p class="testimonial">
                                    "It was glorious and I could not stop to say wkwkw for every single moment".
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To PURA
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/image_elinawati.jpg')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Elinawati</h3>
                                <p class="testimonial">
                                    "It was glorious and I could not stop to say wkwkw for every single moment".
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Danau Toba
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{url('frontend/images/image_shabrina.jpg')}}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <p class="testimonial">
                                    "It was glorious and I could not stop to say wkwkw for every single moment".
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip To Wonosobo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section They Are Loving Us -->
    </main>

    <!-- footer -->
    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURE</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Reviews</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Social Media Kit</a></li>
                                <li><a href="#">Affiliate</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Refund</a></li>
                                <li><a href="#">Security</a></li>
                                <li><a href="#">Reward</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Carrers</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Media</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">Indonesia</a></li>
                                <li><a href="#">Tangerang Selatan</a></li>
                                <li><a href="#">0896-0280-5853</a></li>
                                <li><a href="#">admin@vhierman.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col auto text-gray-500 font-weight-light">2021 Copyright @Achmad Firmansyah.All RIght Reserved.Tangerang Selatan.
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Plugin Jquery -->
    <script src="{{url('frontend/libraries/jquery/jquery-3.5.1.min.js')}}"></script>
    <!-- End Plugin Jquery -->
    <!-- Library Bootstrap -->
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
    <!-- End Library Bootstrap -->
    <!-- Retina JS -->
    <script src="{{url('frontend/libraries/retina/retina.min.js')}}"></script>
    <!-- End Retina JS -->
</body>
</html>