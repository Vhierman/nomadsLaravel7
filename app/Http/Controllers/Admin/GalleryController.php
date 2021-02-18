<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

//Panggil Request Admin Untuk Validasi Gallery
use App\Http\Requests\Admin\GalleryRequest;
//End Panggil Request Admin Untuk Validasi Gallery

//Panggil Model Gallery
use App\Gallery;
//End Panggil Model Package

use Illuminate\Http\Request;

//Memanggil Fungsi String Punya Laravel
use Illuminate\Support\Str;
//End Memanggil Fungsi String Punya Laravel

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Memanggil Semua Data Gallery Dengan Relasi TravelPackage
        $items = Gallery::with(['travel-package'])->get();

        //Mengirimkan parameter items ke dalam folder pages/admin/travl-package/index.blade.php
        return view('pages.admin.gallery.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Memanggil Halaman Tambah Package Travel
        return view ('pages.admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //Tambha Data Gallery
        Gallery::create($data);
        //Redirect Data Gallery
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //fungsi findOrFail artinya Jika datanya ada akan tampil, namun jika data kosong maka akan 404
        $item = Gallery::findOrFail($id);
        //Menampilkan View
        return view('pages.admin.gallery.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //fungsi findOrFail artinya Jika datanya ada akan tampil, namun jika data kosong maka akan 404
        $item = Gallery::findOrFail($id);
        //Melakukan Edit Data Gallery
        $item->update($data);
        //Redirect Data Gallery
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = Gallery::findOrFail($id);
        //Melakukan Delete Data Gallery
        $item->delete();
        //Redirect Data Gallery
        return redirect()->route('gallery.index');
    }
}
