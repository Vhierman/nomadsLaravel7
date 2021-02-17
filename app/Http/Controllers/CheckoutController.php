<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    //Method Index untuk Halaman Frontend Checkout
    public function index(Request $request){
        return view('pages.checkout');
    }
    
    //Method success untuk Halaman Success Checkout
    public function success(Request $request){
        return view('pages.success');
    }
}
