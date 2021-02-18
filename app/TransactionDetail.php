<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package
use Illuminate\Database\Eloquent\SoftDeletes;
//End Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package

class TransactionDetail extends Model
{
    //Mengaktifkan SoftDeletes
    use SoftDeletes;

    //Data Yang boleh dimasukan ke dalam database
    protected $fillable = [
        'transaction_id',
        'username',
        'nationality',
        'is_visa',
        'doe_passport'
    ];

    //
    protected $hidden = [

    ];

    //Membuat Function TravelPackage
    
    public function transaction() {
        return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
    

}
