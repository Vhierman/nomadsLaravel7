<?php

namespace App\Http\Controllers;

//Memanggil Model
use App\Transaction;
use App\TransactionDetail;
use App\TravelPackage;

//Untuk memformat tangal agar bisa disimpan ke database
use Carbon\Carbon;

use Illuminate\Http\Request;

//Fungsi untuk memvalidasi user
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //Method Index untuk Halaman Frontend Checkout
    public function index(Request $request,$id)
    {
        $item = Transaction::with(['details','travel_package','user'])->findOrFail($id);
        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    //Method process untuk Halaman Frontend Checkout
    public function process(Request $request,$id)
    {
        $travel_package = TravelPackage::findOrFail($id);
        
        $transaction = Transaction::create([
            'travel_packages_id' => $id,
            'users_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_package->price,
            'transaction_status' => 'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout',$transaction->id);
    }

    //Method remove untuk Halaman Frontend Checkout
    public function remove(Request $request,$detail_id)
    {
        $item = TransactionDetail::findOrFail($detail_id);
        $transaction = Transaction::with(['details','travel_package'])
        ->findOrFail($item->transactions_id);

        if($item->is_visa)
        {
            $transaction->transaction_total -= 190;
            $transaction->additional_visa -= 190; 
        }

        $transaction->transaction_total -= $transaction->travel_package->price;

        $transaction->save();

        $item->delete();

        return redirect()->route('checkout',$item->transactions_id);

    }

    //Method create untuk Halaman Frontend Checkout
    public function create(Request $request,$id)
    {
        //Contoh Bikin Validasi Langsung Dari Controller
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        if($request->is_visa)
        {
            $transaction->transaction_total += 190;
            $transaction->additional_visa += 190; 
        }

        $transaction->transaction_total += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout',$id);
    }
    
    //Method success untuk Halaman Success Checkout
    public function success(Request $request,$id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();
        
        return view('pages.success');
    }

    
}
