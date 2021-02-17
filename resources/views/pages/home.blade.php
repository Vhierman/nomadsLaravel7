@extends('layouts.app')
@section('title','NOMADS')
@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful World 
            <br>
            As Easy One Click
        </h1>
        <p>You will see beautiful 
            <br>
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">Get Started
        </a>
    </header>
    <!-- End Header -->

    <main>
        <!-- Statistik -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- End Statistik -->

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
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
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
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
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
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
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
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
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
@endsection