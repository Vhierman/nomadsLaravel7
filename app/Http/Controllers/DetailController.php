<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    // Method Index Untuk Halaman Frontend Detail
    public function index(Request $request){
        return view('pages.detail');
    }
}
