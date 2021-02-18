<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package
use Illuminate\Database\Eloquent\SoftDeletes;
//End Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package

class Transaction extends Model
{
    //Mengaktifkan SoftDeletes
    use SoftDeletes;

    //Data Yang boleh dimasukan ke dalam database
    protected $fillable = [
        'travel_packages_id',
        'user_id',
        'additional_visa',
        'transaction_total',
        'transaction_status'
    ];

    //
    protected $hidden = [

    ];

    //Membuat Relasi Details TravelPackage Dan User
    public function details() {
        return $this->hasMany(TransactionDetail::class,'transaction_id','id');
    }
    public function travel_package() {
        return $this->belongsTo(TravelPackage::class,'travel_packages_id','id');
    }
    public function user() {
        return $this->belongsTo(User::class,'users_id','id');
    }

}
