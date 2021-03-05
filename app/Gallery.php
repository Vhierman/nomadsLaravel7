<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package
use Illuminate\Database\Eloquent\SoftDeletes;
//End Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package

class Gallery extends Model
{
    //Mengaktifkan SoftDeletes
    use SoftDeletes;

    //Data Yang boleh dimasukan ke dalam database
    protected $fillable = [
        'travel_packages_id',
        'image'
    ];

    //
    protected $hidden = [

    ];

    //Membuat Relasi Antara Gallery Dengan PackageTravel
    public function travel_package() {
        return $this->belongsTo(TravelPackage::class,'travel_packages_id','id');
    }

}
