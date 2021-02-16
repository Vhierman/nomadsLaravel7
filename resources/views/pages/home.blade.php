@extends('layouts.app')
@section('title')
    NOMADS
@endsection
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

    <!-- Statistik -->
    <main>
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
@endsection