@extends('layouts.app')
@section('title','Detail Travel')
@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>PURA</h1>
                            <p>
                                Republic of Indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/tarikecak.jpg" class="xzoom" id="xzoom-default" xoriginal="frontend/images/tarikecak.jpg"  >
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/tarikecak.jpg">
                                        <img src="frontend/images/tarikecak.jpg" class="xzoom-gallery" width="128"  xpreview="frontend/images/tarikecak.jpg">
                                    </a>
                                    <a href="frontend/images/thumbnail32.jpg">
                                        <img src="frontend/images/thumbnail32.jpg" class="xzoom-gallery" width="128"  xpreview="frontend/images/thumbnail32.jpg">
                                    </a>
                                    <a href="frontend/images/thumbnail42.jpg">
                                        <img src="frontend/images/thumbnail42.jpg" class="xzoom-gallery" width="128"  xpreview="frontend/images/thumbnail42.jpg">
                                    </a>
                                    <a href="frontend/images/thumbnail52.jpg">
                                        <img src="frontend/images/thumbnail52.jpg" class="xzoom-gallery" width="128"  xpreview="frontend/images/thumbnail52.jpg">
                                    </a>
                                    <a href="frontend/images/thumbnail52.jpg">
                                        <img src="frontend/images/thumbnail52.jpg" class="xzoom-gallery" width="128"  xpreview="frontend/images/thumbnail52.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                                Kata "Pura" sesungguhnya berasal dari akhiran bahasa Sanskerta, yang artinya adalah gerbang, misal, angkasapura berarti Gerbang angkasa. Dalam perkembangan pemakaiannya di Pulau Bali, istilah "Pura" menjadi khusus untuk tempat ibadah; sedangkan istilah "Puri" menjadi khusus untuk tempat tinggal para raja dan bangsawan.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img src="frontend/images/icon/event.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/icon/language.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <img src="frontend/images/icon/food.png" alt="" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                <img src="/frontend/images/members1.jpg" class="member-image mr-1">
                                <img src="/frontend/images/members2.jpg" class="member-image mr-1">
                                <img src="/frontend/images/members3.jpg" class="member-image mr-1">
                                <img src="/frontend/images/members4.jpg" class="member-image mr-1">
                                <img src="/frontend/images/members5.jpg" class="member-image mr-1">
                                <img src="/frontend/images/moremember.png" class="member-image mr-1">
                            </div>
                            
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of departures</th>
                                    <td width="50%" class="text-right">22 Aug 2021</td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration </th>
                                    <td width="50%" class="text-right">4D 3N</td>
                                </tr>
                                <tr>
                                    <th width="50%">Type of trip</th>
                                    <td width="50%" class="text-right">Open Trip</td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">$80/Person</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="checkout.html" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection
@push('prepend-style')
    <!-- Library Xzoom -->
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
    <!-- End Library Xzoom -->
@endpush
@push('addon-script')
    <!-- Xzoom -->
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#ffffff',
                xoffset: 15
            });
        });
    </script>
    <!-- End Xzoom -->
@endpush