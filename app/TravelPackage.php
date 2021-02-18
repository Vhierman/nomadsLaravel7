<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package
use Illuminate\Database\Eloquent\SoftDeletes;
//End Definisikan SoftDeletes Agar Bisa dipakai di class Travel Package

class TravelPackage extends Model
{
    //Mengaktifkan SoftDeletes
    use SoftDeletes;

    //Data Yang boleh dimasukan ke dalam database
    protected $fillable = [
        'title','slug','location','about','featured_event','language','foods','departure_date','duration','type','price'
    ];

    //
    protected $hidden = [

    ];

}
