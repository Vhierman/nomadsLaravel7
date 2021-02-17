<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Method Index untuk Halaman Utama Front end
    public function index(Request $request){
        return view('pages.home');
    }
}
