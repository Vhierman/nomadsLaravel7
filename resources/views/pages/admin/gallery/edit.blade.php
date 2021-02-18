{{-- Memanggil Folder layout/admin.blade.php --}}
@extends('layouts.admin')

{{-- Membuat Section Content Agar Bisa Dipanggil --}}
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Travel {{$item->title}}</h1>
</div>

{{-- Fungsi untuk menampilkan pesan jika ada yang errors --}}
@if ($errors->any())
<div class="class alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
{{-- End Fungsi untuk menampilkan pesan jika ada yang errors --}}

{{-- Form Create --}}
<div class="card shadow">
    <div class="card-body">
        {{-- Untuk menyimpan Tambah Data Menggunakan Fungsi store --}}
        <form action="{{route('gallery.update',$item->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="title" value="{{$item->title}}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" placeholder="location" value="{{$item->location}}">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" class="d-block w-100 form-control" rows="10">{{$item->about}}</textarea>
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input type="text" class="form-control" name="featured_event" placeholder="featured_event" value="{{$item->featured_event}}">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" name="language" placeholder="location" value="{{$item->language}}">
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" class="form-control" name="foods" placeholder="foods" value="{{$item->foods}}">
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input type="date" class="form-control" name="departure_date" placeholder="departure_date" value="{{$item->departure_date}}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="duration" value="{{$item->duration}}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="type" value="{{$item->type}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="price" value="{{$item->price}}">
            </div>
            <button type="submit" class="btn btn-primary">
                Ubah
            </button>
        </form>
    </div>
</div>
{{-- End Form Create --}}

</div>
<!-- /.container-fluid -->

@endsection
{{-- Membuat Section Content Agar Bisa Dipanggil --}}