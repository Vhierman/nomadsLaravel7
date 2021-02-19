<?php

namespace App\Http\Controllers;

//Panggil Model
use App\TravelPackage;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    // Method Index Untuk Halaman Frontend Detail
    public function index(Request $request,$slug)
    {
        $item = TravelPackage::with(['galleries'])
        ->where('slug',$slug)
        ->firstOrFail();
        return view('pages.detail',[
            'item' => $item
        ]);
    }
}
