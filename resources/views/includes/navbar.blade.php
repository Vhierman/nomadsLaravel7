<!-- Navbar -->
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        
        <!-- Logo -->
        <a href="{{route('home')}}" class="navbar-brand">
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
                <li class="nav-item mx-md-2"><a href="{{route('home')}}" class="nav-link active">Home</a></li>
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
            
            {{-- Jika Belum LOgin Maka Button nya Masuk --}}
            @guest
             <!-- Mobile Button -->
            <form class="form-inline d-sm-block d-md-none">
                <button class="btn btn-login my-2 my-sm-0" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                    Masuk
                </button>
            </form>
            <!-- End Mobile Button -->
            
            <!-- Desktop Button -->
            <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                    Masuk
                </button>
            </form>
            <!-- End Desktop Button -->   
            @endguest

            {{-- Jika Sudah LOgin Maka Button nya berubah menjadi logout --}}
            @auth
             <!-- Mobile Button -->
            <form action="{{url('logout')}}" method="POST" class="form-inline d-sm-block d-md-none">
                @csrf
                <button class="btn btn-login my-2 my-sm-0" type="submit">
                    Keluar
                </button>
            </form>
            <!-- End Mobile Button -->
            
            <!-- Desktop Button -->
            <form action="{{url('logout')}}" method="POST" class="form-inline my-2 my-lg-0 d-none d-md-block">
                @csrf
                <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                    Keluar
                </button>
            </form>
            <!-- End Desktop Button -->   
            @endauth

        </div>
        <!-- End Menu -->
        
    </nav>
</div>
<!-- End Navbar -->