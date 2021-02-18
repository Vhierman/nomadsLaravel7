<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

//Panggil Request Admin Untuk Validasi Transaction
use App\Http\Requests\Admin\TransactionRequest;
//End Panggil Request Admin Untuk Validasi Transaction

//Panggil Model Transaction
use App\Transaction;
//End Panggil Model Package

use Illuminate\Http\Request;

//Memanggil Fungsi String Punya Laravel
use Illuminate\Support\Str;
//End Memanggil Fungsi String Punya Laravel

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Memanggil Semua Data Transaction Pada Model Transaction Dan Relasinya
        $items = Transaction::with([
            'details','travel_package','user'
        ])->get();

        //Mengirimkan parameter items ke dalam folder pages/admin/travl-package/index.blade.php
        return view('pages.admin.transaction.index',[
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
        // return view ('pages.admin.transaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransactionRequest $request)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //Tambha Data Transaction
        Transaction::create($data);
        //Redirect Data Transaction
        return redirect()->route('transaction.index');
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
        //fungsi findOrFail artinya Jika datanya ada akan tampil, namun jika data kosong maka akan 404
        $item = Transaction::with([
            'details','travel_package','user'
        ])->findOrFail($id);
        //Menampilkan View
        return view('pages.admin.transaction.detail',[
            'item' => $item
        ]);
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
        $item = Transaction::findOrFail($id);
        //Menampilkan View
        return view('pages.admin.transaction.edit',[
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
    public function update(TransactionRequest $request, $id)
    {
        //Menngambil Semua Data Yang sudah di Validasi Pada Request
        $data = $request->all();
        //Membuat Slug
        $data['slug'] = Str::slug($request->title);
        //fungsi findOrFail artinya Jika datanya ada akan tampil, namun jika data kosong maka akan 404
        $item = Transaction::findOrFail($id);
        //Melakukan Edit Data Transaction
        $item->update($data);
        //Redirect Data Transaction
        return redirect()->route('transaction.index');
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
        $item = Transaction::findOrFail($id);
        //Melakukan Delete Data Transaction
        $item->delete();
        //Redirect Data Transaction
        return redirect()->route('transaction.index');
    }
}
