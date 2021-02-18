<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

//Panggil Request Admin Untuk Validasi Travel Package
use App\Http\Requests\Admin\TravelPackageRequest;
//End Panggil Request Admin Untuk Validasi Travel Package

//Panggil Model Travel Package
use App\TravelPackage;
//End Panggil Model Package

use Illuminate\Http\Request;

//Memanggil Fungsi String Punya Laravel
use Illuminate\Support\Str;
//End Memanggil Fungsi String Punya Laravel

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Memanggil Semua Data Travel Package Pada Model Travel Package
        $items = TravelPackage::all();

        //Mengirimkan parameter items ke dalam folder pages/admin/travl-package/index.blade.php
        return view('pages.admin.travel-package.index',[
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
        return view ('pages.admin.travel-package.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //Tambha Data TravelPackage
        TravelPackage::create($data);
        //Redirect Data TravelPackage
        return redirect()->route('travel-package.index');
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
        $item = TravelPackage::findOrFail($id);
        //Menampilkan View
        return view('pages.admin.travel-package.edit',[
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
    public function update(TravelPackageRequest $request, $id)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //fungsi findOrFail artinya Jika datanya ada akan tampil, namun jika data kosong maka akan 404
        $item = TravelPackage::findOrFail($id);
        //Melakukan Edit Data TravelPackage
        $item->update($data);
        //Redirect Data TravelPackage
        return redirect()->route('travel-package.index');
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
    }
}
