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
Route::get('/detail','DetailController@index')->name('detail');
//Route Ke Halaman Frontend Checkout Melalui Controller CheckoutController Method index
Route::get('/checkout','CheckoutController@index')->name('checkout');
//Route Ke Halaman Frontend Success Checkout Melalui Controller CheckoutController Method success
Route::get('/checkout/success','CheckoutController@success')->name('checkout-success');

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

