<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Method index, Haalaman Utama Admin
    public function index(Request $request){
        return view('pages.admin.dashboard');
    }
}
