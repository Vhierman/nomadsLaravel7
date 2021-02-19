<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route Langsung Ke Halaman Frontend Saat URL Pertama kali di akses
Route::get('/','HomeController@index')->name('home');
//Route Ke Halaman Frontend Detail Melalui Detail Controller Method index
Route::get('/detail/{slug}','DetailController@index')->name('detail');


//Checkout Frontend
Route::get('/checkout/{id}','CheckoutController@process')
->name('checkout_process')
//Fungsi ini adalah untuk mengecek apakah sudah login apa belum dan sudah terverifikasi apa belum
->middleware(['auth','verified']);

Route::get('/checkout/{id}','CheckoutController@index')
->name('checkout')
->middleware(['auth','verified']);

Route::get('/checkout/create/{detail_id}','CheckoutController@create')
->name('checkout-create')
->middleware(['auth','verified']);

Route::get('/checkout/remove/{detail_id}','CheckoutController@remove')
->name('checkout-remove')
->middleware(['auth','verified']);

Route::get('/checkout/confirm/{id}','CheckoutController@success')
->name('checkout-success')
->middleware(['auth','verified']);
//End Checkout Frontend


//Route ke Halaman Backend DashboardController method index
Route::prefix('admin')
     ->namespace('Admin')
     //Menambahkan Middleware untuk Authentication
     ->middleware('auth','admin')
     //End Menambahkan Middleware untuk Authentication
     ->group(function() {
    Route::get('/','DashboardController@index')
         ->name('dashboard');
     
     //Mendaftarkan Controller Travel-Package Agar Bisa DI akses
     Route::resource('travel-package','TravelPackageController');
     //End Mendaftarkan Controller Travel-Package Agar Bisa DI akses
     //Mendaftarkan Controller Gallery Agar Bisa DI akses
     Route::resource('gallery','GalleryController');
     //End Mendaftarkan Controller Gallery Agar Bisa DI akses
     //Mendaftarkan Controller Transaction Agar Bisa DI akses
     Route::resource('transaction','TransactionController');
     //End Mendaftarkan Transaction Agar Bisa DI akses
});

//Untuk Authentication Verifikasi Email
Auth::routes(['verify' => true]);
//End Untuk Authentication Verifikasi Email

