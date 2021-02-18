{{-- Memanggil Folder layout/admin.blade.php --}}
@extends('layouts.admin')

{{-- Membuat Section Content Agar Bisa Dipanggil --}}
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Gallery</h1>
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
        <form action="{{route('gallery.update',$item->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="travel_packages_id">Paket Travel</label>
                <select name="travel_packages_id" required class="form-control">
                    <option value="{{$item->travel_packages_id}}">Jangan Diubah</option>
                    @foreach ($travel_packages as $travel_package)
                        <option value="{{ $travel_package->id }}">
                            {{ $travel_package->title }}
                        </option>                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" placeholder="Image">
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