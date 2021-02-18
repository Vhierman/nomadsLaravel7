<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Memanggil Model TravelPackage
use App\TravelPackage;
//Memanggil Model Transaction
use App\Transaction;

class DashboardController extends Controller
{
    //Method index, Haalaman Utama Admin
    public function index(Request $request)
    {
        //Menampilkan View Pada Folder pages/admin/dashboard.blade.php
        return view('pages.admin.dashboard',[
            //Menghitung Paket Travel,Transaksi,Dan Status Pending, Dan Success
            'travel_package' => TravelPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status','SUCCESS')->count()
        ]);
        
    }
}
