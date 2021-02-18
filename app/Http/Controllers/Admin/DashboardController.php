<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Memanggil Model TravelPackage
use App\TravelPackage;
use App\Transaction;

class DashboardController extends Controller
{
    //Method index, Haalaman Utama Admin
    public function index(Request $request)
    {
        //Menampilkan View Pada Folder pages/admin/dashboard.blade.php
        return view('pages.admin.dashboard',[
            //Menghitung Paket Travel
            'travel_package' => TravelPackage::count(),
            // 'transaction' => Transaction::count(),
        ]);
        
    }
}
