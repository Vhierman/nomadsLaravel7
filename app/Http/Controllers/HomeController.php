<?php

namespace App\Http\Controllers;

//Memanggil Model Travel Package
use App\TravelPackage;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Method Index untuk Halaman Utama Front end
    public function index(){
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }
}
